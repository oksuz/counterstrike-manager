<?php
// definations
define('CLASSPATH','classes');
define('DIR_SEP',DIRECTORY_SEPARATOR);
define('Author','Yunus OKSUZ a.k.a 0xyGen');
		
	$config['db']['host'] = 'localhost'; 
	$config['db']['username'] = 'oyunkur_panel';	
	$config['db']['password'] = 'ynsbl';	
	$config['db']['database'] = 'oyunkur_panel';
	
	

/*	$config['db']['host'] = 'localhost'; 
	$config['db']['username'] = 'root';	
	$config['db']['password'] = '123456';	
	$config['db']['database'] = 'cstrike';*/

	
	$config['template'] = 'default';
	
	$config['smarty']['template_dir'] = 'templates/' .  $config['template'] . '/templates/';
	$config['smarty']['compile_dir'] = 'templates/' . $config['template'] . '/compile/';
	$config['smarty']['config_dir'] = 'templates/' .  $config['template'] . '/config/';
	$config['smarty']['cache_dir'] = 'templates/' .  $config['template'] . '/cache/';
	$config['smarty']['font_dir'] = 'templates/' .  $config['template'] . '/fonts/';
	$config['smarty']['css_dir'] = 'templates/' .  $config['template'] . '/css';
	$config['smarty']['js_dir'] = 'templates/' .  $config['template'] . '/js';
	$config['smarty']['img_dir'] = 'templates/' .  $config['template'] . '/img';
	
	$config['misc']['fastdl'] = '/home/oyunkur/sub/resources/jail/';
	$config['misc']['compiled'] = BASEPATH . DIR_SEP . 'compiler/compiled/';
	
	foreach($config['smarty'] as $key => $sm)
	{
		if(!is_dir($sm))
		die($sm .'=> Dizini Buluanamadi Dizini Olusturup Chmod 777 Verin');
	}
	
	require_once(BASEPATH . DIR_SEP . CLASSPATH . DIR_SEP . 'db_class.php');
	require_once(BASEPATH . DIR_SEP . CLASSPATH . DIR_SEP . 'captcha_class.php');
	require_once(BASEPATH . DIR_SEP . CLASSPATH . DIR_SEP . 'valve_rcon.php');
	require_once(BASEPATH . DIR_SEP . CLASSPATH . DIR_SEP . 'libs/Smarty.class.php');
	require_once(BASEPATH . DIR_SEP . CLASSPATH . DIR_SEP . 'class.phpmailer.php');
	require_once(BASEPATH . DIR_SEP . 'includes' . DIR_SEP . 'func.php');
	require_once(BASEPATH . DIR_SEP . 'includes' . DIR_SEP . 'admin_functions.php'); 
	 
	
	#setting up objects 
	$db		 = new ynsql($config['db']);
	$smarty  = new Smarty();
	$captcha = new CaptchaImage();
	$cs 	 = new Valve_RCON();

	$smarty->template_dir = $config['smarty']['template_dir'];
	$smarty->compile_dir = $config['smarty']['compile_dir'];
	$smarty->config_dir = $config['smarty']['config_dir'];
	$smarty->cache_dir = $config['smarty']['cache_dir'];
	$smarty->assign('config',$config['smarty']);

	
?>
