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

{if isset($posted) && $posted eq 'yes'}
{include file=header.tpl}
<div id="lconteiner">
	<div id="ustbar">Giriþ Bilgisi</div>
	<div id="loginfo">
	{if $giris eq 'OK'}
	<img src="{$config.img_dir}/icons/tick_circle.png" style="margin-left:5px"> Giriþ Baþarýlý Yönleniyor 
	<meta http-equiv="refresh" content="3;URL={if isset($returnpath)}{$returnpath}{else}?{/if}">
	{else}
		<img src="{$config.img_dir}/icons/cross.png" style="margin-left:5px"> Kullanýcý Bilgileri Hatalý Yönleniyor
		<meta http-equiv="refresh" content="3;URL=?p=login">
	{/if}
	</div>
	<div id="proceedbutton"><img src="{$config.img_dir}/loading.gif" width="25" height="25" alt="loading"/></div>
</div>
{include file=footer.tpl}


{else}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
		
		<title>OyunKurucusu.Com Game Control Panel Giris- Powered By OyunKurucusu</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
	
	  
		<!-- Main Stylesheet -->

		<link rel="stylesheet" href="{$config.css_dir}/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="{$config.css_dir}/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="{$config.css_dir}/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="{$config.css_dir}/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="{$config.css_dir}/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="{$config.js_dir}/jquery-1.3.2.min.js"></script>

		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="{$config.js_dir}/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="{$config.js_dir}/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="{$config.js_dir}/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->

		
		<!--[if IE 6]>
			<script type="text/javascript" src="{$config.js_dir}/DD_belatedPNG_0.0.7a.js"></script>
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
				<a href="http://www.oyunkurucusu.com"><img id="logo" border="0" src="{$config.img_dir}/logo.png" alt="Simpla Admin logo" /></a>

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
						{if isset($smarty.get.returnpath)}
							<input type="hidden" value="{$smarty.get.returnpath|base64_encode}" name="returnpath" />
						{/if}
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
{/if}