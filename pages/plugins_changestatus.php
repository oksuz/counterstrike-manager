<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$db->sql("SELECT * FROM plugins WHERE id = '".$_GET['pluginid']."'");
	$db->query();
	if($db->numrows() < 1): header('Location:?p=plugins'); die; endif;
	$plugin['details'] = $db->rs();
	
	if($plugin['details']['inconfig'] == 'plugins.ini'):
		$tempPluginsini = getfilefromssh(sshinfo(), $files['plugins'] , TEMP);
		$rfile = $files['plugins'];
	elseif($plugin['details']['inconfig'] == 'mapconfig.ini'):
		$tempPluginsini = getfilefromssh(sshinfo(), $files['mplugins'] , TEMP);
		$rfile = $files['mplugins'];
	endif;
	$content = file_get_contents($tempPluginsini);
	
	if(strpos($content, $plugin['details']['filename']) !== FALSE)
	{
		$db->sql("SELECT * FROM plugin_status 
		WHERE server_id = '".$_SESSION['id']."' 
		AND plugin_id = '".$_GET['pluginid']."'");
		$db->query();
		$rr = $db->rs();
		
		if($_GET['setstatus'] == 0)
		{
			if($rr['status'] == 0)
			{
				$smarty->assign('pluginalready',0);
				echo 'zaten kapali';
			}
			elseif($rr['status'] == 1)
			{
				$db->sql("UPDATE plugin_status 
				SET status = '".$_GET['setstatus']."' 
				WHERE server_id = '".$_SESSION['id']."' AND plugin_id = '".$_GET['pluginid']."'");
				$db->query();
				$content2 = str_replace($plugin['details']['filename'] , ';'.$plugin['details']['filename'], $content);
				file_put_contents($tempPluginsini , $content2 , true);
				putfile2ssh(sshinfo(), $tempPluginsini , $rfile);
				$plugin['on'] = 'no';
				$smarty->assign('plugindetails',$plugin);
			}
		}
		elseif($_GET['setstatus'] == 1)
		{
			if($rr['status'] == 1)
			{
				$smarty->assign('pluginalready',1);
				echo 'zaten acik';
			}
			elseif($rr['status'] == 0)
			{
				$db->sql("UPDATE plugin_status 
				SET status = '".$_GET['setstatus']."' 
				WHERE server_id = '".$_SESSION['id']."' AND plugin_id = '".$_GET['pluginid']."'");
				$db->query();
				$content2 = str_replace(';'.$plugin['details']['filename'], $plugin['details']['filename'], $content);
				file_put_contents($tempPluginsini , $content2 , true);
				putfile2ssh(sshinfo(), $tempPluginsini , $rfile);
				$plugin['on'] = 'yes';
				$smarty->assign('plugindetails',$plugin);
			}
			
		}
	}
	
	$smarty->display('plugins_main.tpl');
	
	/*
	Array
(
    [id] => 2
    [filename] => amx_super_no_gag.amxx
    [pluginname] => Amx Super
    [desc] => Damage, Weapon gibi bir çok eklentiyi barındırır. Kapatmamanız Önerilir.
    [type] => genel
    [inconfig] => plugins.ini
    [extcfg] => amx_super.cfg
)

	*/
	
?>