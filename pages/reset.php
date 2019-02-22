<?php
	#"screen -S hlds -X -p0 eval \"stuff '"_restart"'^m\"";
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	$actions = array('top15reset','serverreset','clearbanned');
	if(in_array($_GET['action'],$actions))
	{
		switch($_GET['action'])
		{
			case 'serverreset':
					$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
					$cs->connect();
					$cs->authenticate();
					$cs->RconCommand('_restart');
					$smarty->assign('op','serverreset');
			break;
			
			case 'top15reset':
					$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
					$cs->connect();
					$cs->authenticate();
					$cs->RconCommand('csstats_reset "1"');
					$cs->RconCommand('changelevel de_dust2');
					sleep(2);
					$cs->RconCommand('csstats_reset "0"');
					$smarty->assign('op','top15reset');
			break;
			
			case 'clearbanned':
				$tempfile = TEMP . 'listip_' . substr(md5(time()),4,12);
				@touch($tempfile);
				putfile2ssh(sshinfo(), $tempfile ,$files['bannedip']);
				$smarty->assign('op','clearbanned');
				unlink($tempfile);
				$smarty->assign('op','clearbanned');
			break;
		}
	}
	$smarty->display('reset.tpl');
?>