<?php
session_start();
define('BASEPATH',realpath(dirname(__FILE__)));
define('PAGE',BASEPATH . '/pages/');
define('TEMP',BASEPATH . '/temp/'); // chmod 777
define('CACHE',BASEPATH . '/cache/'); // chmod 777
define('UPLOADS','uploads/'); // chmod 777
require_once('includes/config.php');

	$_GET['p'] = (isset($_GET['p']) && !empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : FALSE;

	if(is_logged())
	{
		UpdateSession();
		if($_SESSION['odeme'] != ''){ $smarty->assign('odeme',timediff($_SESSION['odeme'])); }
		$smarty->assign('cli_ip',getenv('REMOTE_ADDR'));
		
		$files = array();
		$files['amxconfig'] 	= $_SESSION['dir'] . '/cstrike/addons/amxmodx/configs/amxx.cfg';
		$files['amxadmins'] 	= $_SESSION['dir'] . '/cstrike/addons/amxmodx/configs/users.ini';
		$files['amxmap'] 		= $_SESSION['dir'] . '/cstrike/addons/amxmodx/configs/maps.ini';
		$files['plugins'] 		= $_SESSION['dir'] . '/cstrike/addons/amxmodx/configs/plugins.ini';
		$files['mplugins'] 		= $_SESSION['dir'] . '/cstrike/addons/amxmodx/configs/mapconfig/plugins.ini';
		$files['customconf'] 	= $_SESSION['dir'] . '/cstrike/custom.cfg';
		$files['serverconf'] 	= $_SESSION['dir'] . '/cstrike/server.cfg';
		$files['messages'] 		= $_SESSION['dir'] . '/cstrike/messages.cfg';
		$files['bannedip'] 		= $_SESSION['dir'] . '/cstrike/listip.cfg';
		$files['motd'] 			= $_SESSION['dir'] . '/cstrike/motd.txt';
		$files['mapcycle'] 	 	= $_SESSION['dir'] . '/cstrike/mapcycle.txt';
		$files['moddir'] 		= $_SESSION['dir'] . '/cstrike';
		$files['moddir'] 		= $_SESSION['dir'] . '/cstrike';
		$files['mdldir'] 	 	= $files['moddir'] . '/models';
		$files['customcfg'] 	= $files['moddir'] . '/custom.cfg';
		$files['amx_supercfg'] 	= $files['moddir'] . '/addons/amxmodx/configs/amx_super.cfg';
		$files['plugindir']  	= $files['moddir'] . '/addons/amxmodx/plugins';
		
		
		if($_GET['p'] !== FALSE)
		{
			if(is_file(PAGE . $_GET['p'] . '.php'))
			{
				
				require_once(PAGE . $_GET['p'] . '.php');
			}
			else
			{
				require(PAGE  . '404.php');
			}
		}
		else
		{
			require_once(PAGE  . 'main.php');
		}
	}
	else
	{
		if($_GET['p'] !== FALSE && $_GET['p'] != 'login')
		{
			if(count($_GET) >= 1)
			{
				$r = '';
				foreach($_GET as $k => $v)
				{
					$r .= $k .'='. $v .'|';
				}
			}
		
			header('Location:?p=login&returnpath=/?'.$r);
		}
		elseif($_GET['p'] == 'login')
		{
			require_once(PAGE . 'login.php');
		}
		else
		{
			header('Location:?p=login&returnpath=/?');
		}
	}
?>