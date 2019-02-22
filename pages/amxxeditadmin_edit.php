<?php
		if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
		
		if(isset($_GET['id']))
		{
			if(!isset($_POST['editadminbtn']))
			{
				$_GET['id'] = mysql_real_escape_string(strip_tags($_GET['id']));
				
				$db->sql("SELECT * FROM csadmin WHERE id = '".$_GET['id']."' AND server_id = '".$_SESSION['id']."' "); 
				$db->query();
				if($db->numrows() < 1)
				{
					header('Location:index.php?p=amxxeditadmin'); exit;
				}
				
				$row = $db->rs(true);
				$smarty->assign('admin',$row);
				$smarty->assign('admin_id',$_GET['id']);
			}
			else
			{
			
				
				if($_POST['yetki'] == 'ozel')
				{
					foreach($_POST['custom'] as $key => $val)
					{
						$yetki .= $val;
					}
				}
				else
				{
					$yetki = $_POST['yetki'];
				}
				
				$db->sql("UPDATE csadmin SET user = '".mysql_real_escape_string($_POST['adminuser'])."',pass = '".mysql_real_escape_string($_POST['adminpass'])."', access = '".mysql_real_escape_string($yetki)."', comment = '".mysql_real_escape_string($_POST['aciklama'])."' WHERE id = '".$_POST['admin_id']."'");
				$db->query();
				$tempfile = TEMP . 'users.ini_' . substr(md5(time()),4,12);
				$db->sql("SELECT * FROM csadmin WHERE server_id = '".$_SESSION['id']."'"); $db->query(); $row = $db->rs(false);
				 
				foreach($row as $key => $val)
				{
					$admins .= '"'.$val['user'].'" "'.$val['pass'].'" "'.$val['access'].'" "a" //'.$val['comment'].''."\n";
				}
				 
				$fp = fopen($tempfile,'w+');
				fwrite($fp , $admins);
				fclose($fp);
				 
				putfile2ssh(sshinfo(), $tempfile , $files['amxadmins']);
				unlink($tempfile);
				
				$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
				$cs->connect();
				$cs->authenticate();
				$cs->RconCommand('amx_reloadadmins');
				
			}
			
			$smarty->display('amxxeditadmin_edit.tpl');
		}
		
?>