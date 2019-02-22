<?php
	error_reporting(~E_NOTICE);
	ignore_user_abort(true);
	set_time_limit(0);

	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;

	$admessages = get_adsmessage($files['messages']);
	if(isset($_POST['messages_submit']))
	{
		#Array ( [message] => Array ( [0] => msj1 [1] => msj2 [2] => msj3 ) [submessage] => Array ( [message] => scroll [second] => 60 ) [messages_submit] => Uygula ! ) 
		
		$tempfile = TEMP . 'messages.cfg_' . substr(md5(time()),4,12);
		
		$messages = 'amx_imessage "www.oyunkurucusu.com" "000255100"' . "\n"; # main message
		$data['imessage'][0] = 'www.oyunkurucusu.com'; # main message for cache
		
		for($i = 0 ; $i < 3 ; $i++)
		{
			$messages .= 'amx_imessage "'.notrk($_POST['message'][$i]).'" "000255100"'  . "\n";
			$data['imessage'][$i+1] .= notrk($_POST['message'][$i]);
		}
		$messages .= 'amx_scrollmsg "'.notrk($_POST['submessage']['message']).'" "'.notrk($_POST['submessage']['second']).'"' . "\n";
		
		/* $data for file cache */
		$data['scrollmsg'][0] = '';
		$data['scrollmsg'][1] = notrk($_POST['submessage']['message']);
		$data['scrollmsg'][2] = notrk($_POST['submessage']['second']);
		file_put_contents(BASEPATH . '/cache/messages'.str_replace('.','',$_SESSION['ip']).'.php',"<?php \n \$data = ".var_export($data,true)." \n ?>");
		
		$fp = fopen($tempfile , 'w+');
		fwrite($fp , $messages);
		fclose($fp);
		
		putfile2ssh(sshinfo(), $tempfile , $files['messages']);
		unlink($tempfile);
		
	}
	$smarty->assign('messages',$admessages);
	$smarty->display('messages.tpl');
?>