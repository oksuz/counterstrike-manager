<?php
	error_reporting(~E_NOTICE);

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
		$file = getfilefromssh(sshinfo(), $files['amxmap'] ,  TEMP);
		$fp = fopen($file , 'r');
		$content = fread($fp , filesize($file));
		fclose($fp);
		unset($_SESSION['fileprefix']);
		unlink($file);
	
	if(isset($_POST['srv_mapengine']))
	{
		$file =  TEMP . 'mapcycle.txt_' . substr(md5(time()),4,12);
		$fp = fopen($file , 'w');
		fwrite($fp , $_POST['txtmapengine']);
		fclose($fp);
		putfile2ssh(sshinfo() , $file , $files['amxmap']);
		putfile2ssh(sshinfo() , $file , $files['mapcycle']);
		unset($_SESSION['fileprefix']);
		unlink($file);
	}
	
	$smarty->assign('content',$content);
	$smarty->display('mapengine.tpl');
	
?>