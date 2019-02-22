<?php
if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;

	
	$_GET['op'] 		= (isset($_GET['op'])) ? htmlspecialchars($_GET['op']) : FALSE;
	$_GET['player']		= (isset($_GET['player'])) ? htmlspecialchars($_GET['player']) : FALSE;
	$_GET['uname'] 		= (isset($_GET['uname'])) ? htmlspecialchars(base64_decode($_GET['uname'])) : FALSE;
	$_GET['ip'] 		= (isset($_GET['ip'])) ? htmlspecialchars(base64_decode($_GET['ip'])) : FALSE;
	
	$cs->setinfo($_SESSION['rconpass'], $_SESSION['ip'], $_SESSION['port']);
	$cs->connect();
	$cs->authenticate();
	$test = $cs->RconCommand('echo oyunkurucusu');
	

	#echo $test;#Bad rcon_password.

	if($test == '' || @trim($test) == 'Bad rcon_password.')
	{
		$smarty->assign('swoff',true);
		$swoff = true;
	}
	else
	{
		$swoff = false;
	}

	
	if($_GET['op'] !== FALSE || $_GET['player'] !== FALSE)
	{
		switch($_GET['op'])
		{
			case 'changemap':
				if(isset($_REQUEST['cs_map']) && $_REQUEST['cs_map'] != '')
				{
					$_REQUEST['cs_map'] = htmlspecialchars($_REQUEST['cs_map']);
					$response = $cs->RconCommand('changelevel '.$_REQUEST['cs_map']);
					$smarty->assign('islem','changemap');
					if(strpos($response,'not found') !== FALSE)
					{
						$smarty->assign('failed','yes');
					}
				}
			break;
			
			case 'createpw':
				if(isset($_POST['sv_password']) && $_POST['sv_password'] != '')
				{
					$_POST['sv_password'] = htmlspecialchars($_POST['sv_password']);
					$smarty->assign('islem','createpw');
					$response = $cs->RconCommand('sv_password ' . $_POST['sv_password']);
				}
			break;
			
			case 'removepw':
					$smarty->assign('islem','removepw');
					$response = $cs->RconCommand('sv_password ""');
			break;
			
			case 'kick':
				$smarty->assign('islem','kick');
				$smarty->assign('uname',$_GET['uname']);
				$response = $cs->RconCommand('kick #'.$_GET['player']);
			break;
			
			case 'ban':
				$smarty->assign('islem','ban');
				$smarty->assign('uname',$_GET['uname']);
				$smarty->assign('ip',$_GET['ip']);
				$response = $cs->RconCommand('addip 999 '.$_GET['ip']);
			break;
		}
	}
	
	if($swoff !== TRUE)
	{
	
			$i 					= ServerInfo($cs->RconCommand('status'));
			$i['kalan_sure'] 	= parser($cs->RconCommand('amx_timeleft'));
			$i['round_suresi'] 	= parser($cs->RconCommand('mp_roundtime'));
			$i['timelimit'] 	= parser($cs->RconCommand('mp_timelimit'));
			$i['sxei'] 			= parser($cs->RconCommand('__sxei_required'));
			$i['swpw'] 			= parser($cs->RconCommand('sv_password'));
			$i['swpw'] 			= ($i['swpw'] !== FALSE) ? $i['swpw'] : 'yok';


			$stats = $cs->RconCommand('stats');
			$stats = explode("\n",$stats);
			$stats = explode(" ",$stats[1]);
			$buffer = array();
				
				foreach($stats as $s)
				{
					if(trim($s) != '')
					 $buffer[] = $s;
				}

			$i['uptime'] = $buffer[3];
			$i['oyuncu'] = $buffer[4]; 

			$p = array();
			$usercount = count($i);
			$q = 0;
			for($j = 0; $j <= $usercount ; $j++)
			{
				if(@intval($i[$j]) != 0)
				{
					$p[$q] = $i[$j];
					$p[$q]['adress'] = explode(':',$p[$q]['adress']);
					$p[$q]['adress'] = $p[$q]['adress'][0];
					$q++;
				}
			}
			
		$db->sql("SELECT * FROM csadmin WHERE server_id = '".$_SESSION['id']."'");
		$db->query();
		$admins = $db->rs(false);
		$cs->disconnect();
		
		$smarty->assign('admins',$admins);
		$smarty->assign('players',$p);
		$smarty->assign('info',$i);
	}
$smarty->display('main.tpl');
?>
