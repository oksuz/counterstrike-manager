<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	$db->sql("SELECT * FROM server");
	$db->query();
	$r = $db->rs(false);
	foreach($r as $val)
	{
		$log = $val['dir'] . '/cstrike/logs';
		$logamx = $val['dir'] . '/cstrike/addons/amxmodx/logs';
		$ssh = sshinfo();
		ssh2exec($ssh , 'cd ' . $log . ' && rm -rf * && cd ' . $logamx . ' && rm -rf * ');
		echo 'cd ' . $log . ' rm -rf * && cd ' . $logamx . ' rm -rf * <br />'; 
		
	}
	
?>