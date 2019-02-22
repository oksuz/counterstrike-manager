<?php
error_reporting(~E_NOTICE);

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	$_GET['action'] = (isset($_GET['action'])) ? strip_tags($_GET['action']) : FALSE;
	
	if($_GET['action'] !== FALSE && $_GET['action'] == 'uploadpic')
	{
		if(isset($_POST['picupload_submit']))
		{
			$up = picupload($_FILES['pic'],UPLOADS);
			$smarty->assign('uploaded','OK');
			$smarty->assign('imgpath',$up);
		}	
		$smarty->display('picupload.tpl');
	exit;
	}	
	else
	{
		$file = getfilefromssh(sshinfo(),$files['motd'],TEMP);
		$fp = fopen($file,'r');
		$content = fread($fp,filesize($file));
		fclose($fp);
		if(isset($_POST['srv_motd_submit']))
		{
			$fp = fopen($file,'w+');
			fwrite($fp , $_POST['txtmotd']);
			fclose($fp);
			putfile2ssh(sshinfo(), $file , $files['motd']);
		}
		else
		{
			unlink($file);
		}
		
		$smarty->assign('content',$content);
	
		$smarty->display('motd.tpl');
	}
?>