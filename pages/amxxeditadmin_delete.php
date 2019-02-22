<?php
if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	if(isset($_GET['id'])):
	
		$_GET['id'] = mysql_real_escape_string(htmlspecialchars($_GET['id']));
		
		if(deleteadmin($_GET['id']))
		{
			$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
			$cs->connect();
			$cs->authenticate();
			$message = $cs->RconCommand('amx_reloadadmins');
		
			header('Location:?p=amxxeditadmin');
		}
		else
		{
			die('Bir Hata Meydana Geldi');
		}
	endif;
?>