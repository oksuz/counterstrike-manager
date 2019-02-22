<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	if(isset($_POST['addadminbtn']))
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
		
		if($_POST['adminuser'] == '' || $_POST['adminpass'] == '' || $yetki == '')
		{
			$smarty->assign('blankfield',true);
		}
		else
		{
			$addinfo['server_id'] = $_SESSION['id'];
			$addinfo['user'] = 	$_POST['adminuser'];	
			$addinfo['pass'] = 	$_POST['adminpass'];	
			$addinfo['access'] = 	$yetki;
			$addinfo['comment'] = $_POST['aciklama'];
			$db->insert('csadmin',$addinfo,array('id'));
			if(amxaddadmin($addinfo)):
				$succeed = 'ok';
				$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
				$cs->connect();
				$cs->authenticate();
				$message = $cs->RconCommand('amx_reloadadmins');
			else:
				$succeed = 'fail';
			endif;
		}
	}
	elseif(isset($_GET['plname']) && !empty($_GET['plname']))
	{
		$uname = base64_decode($_GET['plname']);
		$db->sql("SELECT * FROM csadmin WHERE server_id = '".$_SESSION['id']."' AND user = '".mysql_real_escape_string($uname)."'");
		$db->query();
		if($db->numrows() < 1)
		{
			// do not anything
		}
		else
		{
			$row = $db->rs();
			$smarty->assign('alreadyadmin','yes');
			$smarty->assign('admindetail',$row);
		}
	}
	$smarty->display('amxxaddadmin.tpl');
?>