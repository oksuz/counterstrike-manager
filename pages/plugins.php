<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$_GET['pluginid'] = (isset($_GET['pluginid']) && !empty($_GET['pluginid'])) ? mysql_real_escape_string(intval($_GET['pluginid'])) : FALSE;
	$_GET['setstatus'] = (isset($_GET['setstatus'])) ? mysql_real_escape_string(intval($_GET['setstatus'])) : 'k';
	$_GET['action'] = (isset($_GET['action']) && !empty($_GET['action'])) ? htmlspecialchars($_GET['action']) : FALSE;

	if($_GET['pluginid'] !== FALSE && $_GET['action'] == 'cvars')
	{
		require_once(PAGE . 'plugins_cvars.php');
	}
	elseif($_GET['pluginid'] !== FALSE && $_GET['setstatus'] != 'k')
	{
		require_once(PAGE . 'plugins_changestatus.php');
	}
	else
	{
		$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
		$cs->connect();
		$cs->authenticate();
		$i = ServerInfo($cs->RconCommand('status'));
		$map = $i['map'];
		
		$db->sql("SELECT 
		plugins.*, 
		plugin_status.server_id, 
		plugin_status.plugin_id, 
		plugin_status.status 
		FROM plugins
		INNER JOIN plugin_status ON plugins.id = plugin_status.plugin_id 
		WHERE plugin_status.server_id = '".$_SESSION['id']."' AND plugins.type = 'genel' ORDER BY plugins.pluginname ASC");
		$db->query();
		
		if(preg_match('/^(jail_|jail|some1|jb_|jailbreak_)/',$map))
			$type = 'jail';
		elseif(preg_match('/^(de_|cs_)/',$map))
			$type = 'pro';
		elseif(preg_match('/^(aim_|fun_|fy_|awp_|ka_|35hp)/',$map))
			$type = 'fun';
		elseif(preg_match('/^(surf_)/',$map))
			$type = 'surf';
		elseif(preg_match('/^(dr_|deathrun_)/',$map))
			$type = 'deathrun';
		elseif(preg_match('/^(war3_)/',$map))
			$type = 'war3';
		elseif(preg_match('/^(gg_)/',$map))
			$type = 'gungame';
		elseif(preg_match('/^(zm_)/',$map))
			$type = 'zombie';
		elseif(preg_match('/^(bhop_|kz_)/',$map))
			$type = 'bhop';
		else
			$type = '';
			
		if($db->numrows() < 1)
		{
			$smarty->assign('plug','fail');
		}
		else
		{	$rows = $db->rs(false);
			$smarty->assign('plug',$rows);
		}
		
		if($type == '')
		{
			$smarty->assign('othermodplugins','failed');
		}
		else
		{
			$db->sql("SELECT 
			plugins.*, 
			plugin_status.server_id, 
			plugin_status.plugin_id, 
			plugin_status.status 
			FROM plugins
			INNER JOIN plugin_status ON plugins.id = plugin_status.plugin_id 
			WHERE plugin_status.server_id = '".$_SESSION['id']."' AND plugins.type = '".$type."'");
			$db->query();
			if($db->numrows() < 1)
			{
				$smarty->assign('xpartyplugins','failed');
			}
			else
			{
				$type = ucfirst(strtolower($type));
				$rows = $db->rs(false);
				$smarty->assign('xpartyplugins',$type);
				$smarty->assign('modplugins',$rows);
			}
		}
		
		$smarty->display('plugins_main.tpl');
		$cs->disconnect();
	}
?>