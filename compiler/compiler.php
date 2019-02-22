<?php
	$secretkey = '^yunusahmet^';

	if(isset($_GET['randomamxxname']) && isset($_GET['secretkey']) && $_GET['secretkey'] == $secretkey)
	{
		switch($_GET['type'])
		{
			case 'pelerin':
				copy('admin_pelerin.sma', $_GET['smaname'] . '.sma');
				$content = file_get_contents('admin_pelerin.sma');
				$content = str_replace('degisecekalan.mdl',$_GET['mdlname'],$content);
				file_put_contents($_GET['smaname'] . '.sma' , $content);
				echo exec('./amxxpc '.$_GET['smaname'].'.sma -ocompiled/'.$_GET['randomamxxname'].'.amxx');
				@unlink($_GET['smaname'] . '.sma');
			break;
			
			case 'jailmodel':
				copy('jailbreak_manager_en.sma', $_GET['smaname'] . '.sma');
				$content = file_get_contents('jailbreak_manager_en.sma');
				$content = str_replace('oyunkurucusu_terrorline',$_GET['mdlname']['t'],$content);
				$content = str_replace('oyunkurucusu_ctline',$_GET['mdlname']['ct'],$content);
				file_put_contents($_GET['smaname'] . '.sma' , $content);
				echo exec('./amxxpc '.$_GET['smaname'].'.sma -ocompiled/'.$_GET['randomamxxname'].'.amxx');
				@unlink($_GET['smaname'] . '.sma');
			break;
			
			case 'head':
				copy('admin_head.sma', $_GET['smaname'] . '.sma');
				$content = file_get_contents('admin_head.sma');
				$content = str_replace('degisecekalan.mdl',$_GET['mdlname'],$content);
				file_put_contents($_GET['smaname'] . '.sma' , $content);
				echo exec('./amxxpc '.$_GET['smaname'].'.sma -ocompiled/'.$_GET['randomamxxname'].'.amxx');
				@unlink($_GET['smaname'] . '.sma');
			break;
			
		}
	}
?>