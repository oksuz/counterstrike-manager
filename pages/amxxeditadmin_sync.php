<?php
	if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	adminsync(true);
	header('Location:'.$_SERVER['HTTP_REFERER']);
?>