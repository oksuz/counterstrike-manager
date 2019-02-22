<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$_GET['action'] = (isset($_GET['action']) && $_GET['action'] == 'view') ? htmlspecialchars($_GET['action']) : FALSE;
	$_GET['ticketid'] = (isset($_GET['ticketid']) && !empty($_GET['ticketid'])) ? mysql_real_escape_string($_GET['ticketid']) : FALSE;
	
	if($_GET['action'] !== FALSE && $_GET['ticketid'] !== FALSE)
	{
		require_once(PAGE . 'ticket_view.php');
		exit;
	}

	if(isset($_POST['ticket_submit']))
	{
		foreach($_POST as $key => $val)
		{
			if($val == '')
			{
				$info = 'fail';
			}
		}
		if(isset($info))
		{
			$smarty->assign('info',$info);
		}
		else
		{

			$_POST = array_map('mysql_real_escape_string',$_POST);
			if(strlen($_POST['problem']) > 500)
			{
				$smarty->assign('info','bigger');
			}
			else
			{
				$insert = array();
				$insert['server_id'] = $_SESSION['id'];
				$insert['critical'] = $_POST['critical'];
				$insert['requestby'] = $_POST['requestby'];
				$insert['title'] = $_POST['title'];
				$insert['description'] = $_POST['problem'];
				$insert['status'] = 1;
				$db->insert('support',$insert,array('id','supportperson','solution'));
				$smarty->assign('info','ok');
				
				$content = 'Yeni Destek Talebi' . "\n";
				$content .= "Server Ip => " . $_SESSION['ip'] . "\n";
				$content .= "Support ID => " . $db->insertid() . "\n";
				foreach($insert as $k => $v)
				{
					$content .= $k .' => '.$v . "\n";
				}
				
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-9\r\n";			
				
				@mail('sunucu@oyunkurucusu.com','Yeni Destek Talebi '.$_SESSION['ip'] , $content , $headers);
				@mail('ticket@oyunkurucusu.com','Yeni Destek Talebi '.$_SESSION['ip'] , $content,  $headers);
			}
		}
		
	}
	
	//$db->sql("SELECT support.*,support_person.name,support_person.surname 
	//FROM support INNER JOIN support_person ON support.supportperson = support_person.id 
	//WHERE server_id = '".$_SESSION['id']."' AND status != '3' ORDER BY id DESC LIMIT 10");
	if(isset($_GET['status']) && $_GET['status'] == 'completed')
		$db->sql("SELECT * FROM support WHERE server_id = '".$_SESSION['id']."' AND status = 4 ORDER BY id DESC LIMIT 10");
	else
		$db->sql("SELECT * FROM support WHERE server_id = '".$_SESSION['id']."' AND status != 4 ORDER BY id DESC LIMIT 10");
		
	$db->query();

	if($db->numrows() < 1)
	{
		$smarty->assign('request','fail');
	}
	else
	{
		$smarty->assign('request',$db->rs(false));
	}
	

	$smarty->display('ticket.tpl');
		
?>