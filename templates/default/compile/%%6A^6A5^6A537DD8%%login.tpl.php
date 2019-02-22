<?php /* Smarty version 2.6.26, created on 2011-04-08 11:55:16
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_encode', 'login.tpl', 135, false),)), $this); ?>
<!---

/*#####################################################################
	(C) 2010 ALL RIGHTS RESERVED BY OYUNKURUCUSU.COM
	
	@Script : OyunKurucusu.Com Counter Strike v1.6 Web Based Game Control Panel 
	@Author : Yunus Öksüz aka 0xyGen
	@Web  	: http://oyunkurucusu.com | http://yns.linuxboyz.com
	@mail	: root@oyunkurucusu.com   | yns@linuxboyz.com
	@uri 	: http://panel.oyunkurucusu.com

	@Version 	: 1
	@Revision 	: 0
	@File	 	: 
	
	!IMPORTANT : THIS SCRIPT IS NOT FREE SOFTWARE !!!
	
######################################################################*/

--->

<?php if (isset ( $this->_tpl_vars['posted'] ) && $this->_tpl_vars['posted'] == 'yes'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="lconteiner">
	<div id="ustbar">Giriþ Bilgisi</div>
	<div id="loginfo">
	<?php if ($this->_tpl_vars['giris'] == 'OK'): ?>
	<img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/tick_circle.png" style="margin-left:5px"> Giriþ Baþarýlý Yönleniyor 
	<meta http-equiv="refresh" content="3;URL=<?php if (isset ( $this->_tpl_vars['returnpath'] )): ?><?php echo $this->_tpl_vars['returnpath']; ?>
<?php else: ?>?<?php endif; ?>">
	<?php else: ?>
		<img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross.png" style="margin-left:5px"> Kullanýcý Bilgileri Hatalý Yönleniyor
		<meta http-equiv="refresh" content="3;URL=?p=login">
	<?php endif; ?>
	</div>
	<div id="proceedbutton"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/loading.gif" width="25" height="25" alt="loading"/></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php else: ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
		
		<title>OyunKurucusu.Com Game Control Panel Giris- Powered By OyunKurucusu</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
	
	  
		<!-- Main Stylesheet -->

		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['css_dir']; ?>
/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['css_dir']; ?>
/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['css_dir']; ?>
/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['css_dir']; ?>
/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['css_dir']; ?>
/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['js_dir']; ?>
/jquery-1.3.2.min.js"></script>

		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['js_dir']; ?>
/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['js_dir']; ?>
/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['js_dir']; ?>
/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->

		
		<!--[if IE 6]>
			<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['js_dir']; ?>
/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<a href="http://www.oyunkurucusu.com"><img id="logo" border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/logo.png" alt="Simpla Admin logo" /></a>

			</div> <!-- End #logn-top -->
			<table align="center"><tr><td>
			<div id="login-content">
				
				<form action="index.php?p=login&action=login" method="post">
				
					<div class="notification information png_bg">
						<div>
							Kullanýcý Adý ve Þifrenizi Paylaþmayýnýz.
						</div>
					</div>
					
					<p>

						<label>K. Adý : </label>
						<input class="text-input" type="text" name="username" autocomplete="off" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Þifre : </label>
						<input class="text-input" type="password" name="password" />
						<?php if (isset ( $_GET['returnpath'] )): ?>
							<input type="hidden" value="<?php echo ((is_array($_tmp=$_GET['returnpath'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
" name="returnpath" />
						<?php endif; ?>
					</p>

	
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Giriþ" />			
						<input class="button" type="button" onclick="window.location.href='?p=login&action=lostpw'" value="Þifremmi Unuttum" />			
					</p>
					
				</form>

			</div> <!-- End #login-content -->
			</td></tr></table>
		</div> <!-- End #login-wrapper -->
		
  </body>
  </html>
<?php endif; ?>