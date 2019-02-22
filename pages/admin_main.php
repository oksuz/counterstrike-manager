<?php/*	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	
	if(isset($_POST['servermanage']))
	{
		$_POST['servermanage'] = mysql_real_escape_string($_POST['servermanage']);
		$db->sql("SELECT * FROM server WHERE ip = '".$_POST['servermanage']."'");
		$db->query();
		$num = $db->numrows();
		if($num < 1)
		{
			$smarty->assign('ipnotfound',true);
		}
		else
		{
			sw_setinfo($_POST['servermanage']);
			header('Location:?p=main');
		}
	}
	
	
	$db->sql("SELECT * FROM server WHERE admin_id = '".$_SESSION['admin_id']."' ORDER BY ip ASC");
	$db->query();
	$row = $db->rs(false);
	
	$smarty->assign('ips',$row);
	$smarty->display('admin/main.tpl');	*/?>