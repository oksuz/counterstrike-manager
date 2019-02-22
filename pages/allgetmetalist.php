<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	$db->sql("SELECT * FROM server");
	$db->query();
	$r = $db->rs(false);
	set_time_limit(0);
	
	$ssh = sshinfo();
	foreach($r as $val)
	{
			$cs->setinfo($val['rconpass'], $val['ip'], $val['port']);
			$cs->connect();
			$cs->authenticate();
			$test = $cs->RconCommand('meta list');
			
			echo '<b>'.$val['ip'] .'</b><br />'. htmlspecialchars($test) . "\n<br /><br /><br />\n";
	}
?>


