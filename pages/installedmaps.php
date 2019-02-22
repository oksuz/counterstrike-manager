<?php
error_reporting(~E_NOTICE);

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	
	$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
	$cs->connect();
	$cs->authenticate();
	
	$maplist = ssh2exec(sshinfo()  , 'cd ' . $files['moddir'] . '/maps/ && ls'); 
	
	if($maplist == '')
	{
		if(!is_file(CACHE . 'maplist.php'))
		{
			$maplist = explode("\n",$maplist);
			$maplist = array_map("bsp_replace",$maplist);
			file_put_contents(CACHE . 'maplist.php', "<?php \n \$maplist = ".var_export($maplist,true) ."\n ?>");
		}
		else
		{
			include(CACHE . 'maplist.php');
		}
	}
	else
	{
		$maplist = explode("\n",$maplist);
		$maplist2 = array();
		for($i = 0 , $c = count($maplist); $i < $c ; $i++)
		{
			if(preg_match('/(bsp)$/',$maplist[$i]))
			{
				$maplist2[$i] = $maplist[$i]; 
			}
		}
		$maplist2 = array_map("bsp_replace",$maplist2);
	}
		
	if(isset($_GET['sort']) && !empty($_GET['sort']) && $_GET['sort'] == 'byname')
		sort($maplist2);
	$smarty->assign('maplist',$maplist2);
	$smarty->display('installedmaps.tpl');
	$cs->disconnect();
	
?>