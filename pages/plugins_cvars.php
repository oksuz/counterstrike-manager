<?php
if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
//print_r($_POST); //debug
	if(isset($_POST['csubmit']))
	{
		$count = count($_POST['c']);
		for($i = 0 ; $i < $count ; $i++)
		{
			$_POST['c'][$i] = array_map('mysql_real_escape_string',$_POST['c'][$i]);
			if($_POST['c'][$i]['value'] != $_POST['c'][$i]['hidden'])
			{
				$db->sql("UPDATE cvar_status 
				SET value = '".$_POST['c'][$i]['value']."' 
				WHERE sid = '".$_SESSION['id']."' AND id = '".$_POST['c'][$i]['id']."'");
				$db->query();
				$j[$_POST['c'][$i]['cvarname']] = $_POST['c'][$i]['value'];
			}
		}
		
		$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
		$cs->connect();
		$cs->authenticate();
		changeval($j , $files[$_POST['cvarcfg']]);
		foreach($j as $key => $val)
		{
			$cs->RconCommand($key.' '.$val);
		}
		
	}
	$db->sql("SELECT 
	cvar_status.*, 
	plugin_cvars.name,
	plugin_cvars.description,
	plugin_cvars.cvar,
	plugins.pluginname,
	plugins.cvarcfg,
	plugins.desc
	FROM 
	cvar_status
	INNER JOIN plugin_cvars ON 
	cvar_status.cid = plugin_cvars.id 
	INNER JOIN plugins ON cvar_status.pid = plugins.id
	WHERE sid = '".$_SESSION['id']."' AND
	cvar_status.pid = '".$_GET['pluginid']."'
	");
	$db->query();
	$cvars = $db->rs(false);
	$smarty->assign('cvars',$cvars);
	$smarty->display('plugins_cvars.tpl');

?>