<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	$db->sql("SELECT * FROM server");
	$db->query();
	$r = $db->rs(false);
	foreach($r as $val)
	{
		if($val['odeme'] != ''):
		$diff = timediff($val['odeme']);
		if($diff == 'zero')
		{
			echo $val['ip'] . ' - <font color="yellow">Bugun Odeme Gunu</font><br />';
		}
		elseif($diff == 'toolate')
		{
			echo $val['ip'] . ' - <font color="red">Odeme Gunu Gecti</font><br />';
		}
		else
		{
			echo $val['ip'] . ' - ' . $diff . ' Gun Kaldi<br />';
		}
		endif;
	}
?>