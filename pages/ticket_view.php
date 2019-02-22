<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$db->sql("SELECT * FROM support WHERE server_id = '".$_SESSION['id']."' AND id = '".$_GET['ticketid']."'");
	$db->query();
	if($db->numrows() < 1)
	{
		header('Location:?p=ticket');
		exit;
	}
	$rows = $db->rs();
	$db->sql("SELECT * FROM support_person WHERE id = '".$rows['supportperson']."'");
	$db->query();
	$supportperson = $db->rs();

	$smarty->assign('detail',$rows);
	$smarty->assign('person',$supportperson);
	$smarty->display('ticket_view.tpl');
	
?>