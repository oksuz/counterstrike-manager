<?php
/*	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
		
	$_GET['sshid']	= (isset($_GET['sshid']) && !empty($_GET['sshid']) && intval(trim($_GET['sshid'])) != '') ? mysql_real_escape_string($_GET['sshid']) : FALSE;
	$_GET['action']	= (isset($_GET['action']) && !empty($_GET['action'])) ? strip_tags($_GET['action']) : FALSE;

	if($_GET['action'] !== FALSE && $_GET['action'] == 'sshinfoadd')
	{
		if(isset($_POST['sshadd']))
		{
			$_POST = array_map('htmlspecialchars',$_POST);
			$error = array();
			foreach($_POST as $key => $val)
			{
				if($_POST['key'] == '')
				{
					$blankfield = true;
					break;
				}
			}
			$grup = mysql_real_escape_string($_POST['sshgrup']);
			$db->sql("SELECT * FROM sshinfo WHERE grup = '".$grup."'");
			$db->query();
			if($db->numrows() < 1)
			{
				if($blankfield !== TRUE)
				{
					$insert['admin_id'] = $_SESSION['admin_id'];
					$insert['grup'] = $_POST['sshgrup'];
					$insert['sshuser'] = $_POST['sshusername'];
					$insert['sshpass'] = $_POST['sshpass'];
					$insert['ip'] = $_POST['sship'];
					$insert['port'] = $_POST['sshport'];
					$db->insert('sshinfo',$insert,array('id'));
					$inserted = TRUE;
				}
				else
				{
					$smarty->assign('blankfield',TRUE);
				}
			}
			else
			{
				$smarty->assign('sample',TRUE);
			}
		}
	
		$smarty->assign('error',$error);
		$smarty->display('admin/sshinfoadd.tpl');
		exit;
	}
	
	if($_GET['sshid'] !== FALSE)
	{
		$db->sql("SELECT * FROM sshinfo WHERE admin_id = '".$_SESSION['admin_id']."' AND id = '".$_GET['sshid']."'");
		$db->query(); 
		$row = $db->rs(true);
		if($db->numrows() < 1)
		{
			header('Location:index.php?p=admin_sshinfo');
			exit;
		}
		
		if(isset($_POST['sshsubmit']))
		{
			$_POST = array_map('htmlspecialchars',$_POST);
			$_POST = array_map('mysql_real_escape_string',$_POST);
			
			$bosalan == '';
			
			foreach($_POST as $key => $val)
			{
				if($_POST[$key] == '')
				{
					$bosalan = true;
					break;
				}
			}
			
			if($bosalan === TRUE)
			{
				$smarty->assign('seted','y');
			}
			else
			{
				$db->sql("UPDATE
				sshinfo SET
				sshuser = '".$_POST['sshusername']."',
				sshpass = '".$_POST['sshpass']."',
				ip = '".$_POST['sship']."',
				port = '".$_POST['sshport']."'
				WHERE id = '".$_POST['sshid']."'
				AND admin_id = '".$_SESSION['admin_id']."'
				");
				$db->query();
				$smarty->assign('seted','no');
			}
			
		}
		
		#Array ( [sshusername] => root [sshpass] => [sship] => 213.128.84.162 [sshport] => 22 [sshgrup] => servergrubu1 [sshid] => 1 [sshsubmit] => Güncelle ) 
		#id 	grup 	sshuser 	sshpass 	ip 	port
		
		
		$smarty->assign('sshedit', TRUE);
		$smarty->assign('sshinfo', $row);
		
	}
	
	$db->sql("SELECT * FROM sshinfo WHERE admin_id = '".$_SESSION['admin_id']."'");
	$db->query();
	$row = $db->rs(false);
	
	
	$smarty->assign('ssh', $row);
	$smarty->display('admin/sshinfo.tpl');
	*/
?>