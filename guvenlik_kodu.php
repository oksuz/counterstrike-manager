<?php
session_start();
define('BASEPATH',realpath(dirname(__FILE__)));
	require_once('includes/config.php');
	$captcha->font_dir = $config['smarty']['font_dir'];
	$captcha->case_sensivty = false; // buyuk kucuk harf duyarliligi devre disi 
	$captcha->chars = 3; // karakterli bir captcha
	$captcha->width = 100; // geniþlik
	$captcha->height = 40; // yukseklik
	$captcha->size = 15;
	$captcha->start();
	$captcha->create();
?>