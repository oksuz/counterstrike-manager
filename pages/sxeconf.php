<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	ignore_user_abort(true);
	
	$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
	$cs->connect();
	$cs->authenticate();
	
	if(isset($_POST['sxesubmit']))
	{
		$cs->RconCommand('__sxei_required "'.$_POST['sxe']['status'].'"');
		$cs->RconCommand('__sxei_16bpp "'.$_POST['sxe']['bbp'].'"');
		$cs->RconCommand('__sxei_antispeed "'.$_POST['sxe']['antispeed'].'"');
		$cs->RconCommand('__sxei_antiwall "'.$_POST['sxe']['antiwall'].'"');
		
		$i['__sxei_required'] = $_POST['sxe']['status'];
		$i['__sxei_16bpp'] = $_POST['sxe']['bbp'];
		$i['__sxei_antispeed'] = $_POST['sxe']['antispeed'];
		$i['__sxei_antiwall'] = $_POST['sxe']['antiwall'];
		
		changeval($i , $files['serverconf']);
	}
	
	$smarty->assign('sxestatus',parser($cs->RconCommand('__sxei_required')));
	$smarty->assign('sxecli',parser($cs->RconCommand('__sxei_clt_ver')));
	$smarty->assign('sxeserv',parser($cs->RconCommand('__sxei_srv_ver')));
	$smarty->assign('sxe16bbp',parser($cs->RconCommand('__sxei_16bpp')));
	$smarty->assign('sxeantispeed',parser($cs->RconCommand('__sxei_antispeed')));
	$smarty->assign('sxeantiwall',parser($cs->RconCommand('__sxei_antiwall')));
	
	$smarty->display('sxeconf.tpl');
?>