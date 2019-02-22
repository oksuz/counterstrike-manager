<?php

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;

	if(isset($_POST['sendcmd']))

	{

		$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);

		$cs->connect();

		$cs->authenticate();

		$response = $cs->RconCommand(strip_tags($_POST['cmd']));

		$smarty->assign('response', $response );

	}

	$smarty->display('cmdrcon.tpl');

?>