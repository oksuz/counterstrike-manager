<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;

	$_GET['action'] = (isset($_GET['action']) && is_file(PAGE . $_GET['action'].'.php')) ? strip_tags(htmlspecialchars($_GET['action'])) : FALSE;
	if($_GET['action'] === FALSE):
	
		$db->sql("SELECT * FROM server WHERE id = '".$_SESSION['id']."'");
		$db->query(); $row = $db->rs(true);
		
		if($row['usersync'] == 0)
		{
			adminsync();
			$db->sql("UPDATE server SET usersync = 1 WHERE id = '".$_SESSION['id']."'");
			$db->query();
		}
		
		$db->sql("SELECT * FROM csadmin WHERE server_id = '".$_SESSION['id']."'"); 
		$db->query(); 
		unset($row);
		if($db->numrows() < 1){ $smarty->assign('admin','fail'); }
		else { $row = $db->rs(false); $smarty->assign('admin',$row); }
		$smarty->display('amxxeditadmin.tpl');
	else:
		include_once(PAGE . $_GET['action'] . '.php');
	endif;
	
?>