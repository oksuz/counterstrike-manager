<?php

error_reporting(~E_NOTICE);
ignore_user_abort(true);
set_time_limit(0);

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
	$cs->connect();
	$cs->authenticate();
	$db->sql("SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'"); $db->query(); $uinfo = $db->rs(true);
	
	if(isset($_POST['srv_rcon_submit']))
	{
		if((isset($_POST['servername']) && isset($_POST['rconpass'])) && (!empty($_POST['servername']) && !empty($_POST['rconpass'])))
		{
			if(!preg_match('/[0-9]/',$_POST['servername']))
			{
				$_POST['servername'] = notrk(strip_tags($_POST['servername']));
				$_POST['rconpass'] = notrk(strip_tags($_POST['rconpass']));

				
				$cs->RconCommand('hostname "' . $_POST['servername'] . '"');
				$cs->RconCommand('rcon_password "' . $_POST['rconpass'] . '"');
				
				
				$db->sql("UPDATE server 
				SET rconpass = '".mysql_real_escape_string($_POST['rconpass'])."' , 
				name = '".mysql_real_escape_string($_POST['servername'])."' 
				WHERE ip = '".$_SESSION['ip']."'
				");
				$db->query();
				
				$_SESSION['rconpass'] = $_POST['rconpass'];
				$_SESSION['name'] 	  = $_POST['servername'];
				
				$i['hostname'] = $_POST['servername'];
				$i['rcon_password'] = $_POST['rconpass'];
				changeval($i , $files['serverconf']);
			}
			else
			{
				$smarty->assign('rakam',true);
			}
		}
	}
	elseif(isset($_POST['changeppass']))
	{

		if(!isset($_POST['ppassword']) && empty($_POST['ppassword']))
		{
			$smarty->assign('passchange','FAIL');
		}
		else
		{
			$db->sql("UPDATE users SET password = '".mysql_real_escape_string($_POST['ppassword'])."' WHERE id = '".$_SESSION['user_id']."'");
			$db->query();
			logout();
			header('Location:index.php?p=login');
		}
	}

	$i['hostname'] = parser($cs->RconCommand('hostname'));
	$i['rconpass'] = parser($cs->RconCommand('rcon_password'));
	
	$cs->disconnect();
	
	$smarty->assign('info',$i);
	$smarty->assign('uinfo',$uinfo);
	$smarty->display('srvrcon.tpl');
?>