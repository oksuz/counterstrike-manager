<?php /* Smarty version 2.6.26, created on 2011-03-31 11:14:56
         compiled from menu.tpl */ ?>
<div id="header_logo"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/okdp.jpg" /></div>
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo <a href="#"><img id="logo" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/logo.png" alt="Simpla Admin logo" /></a>(221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php?p=main" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Anasayfa
					</a>  
				</li>
				<?php if (! isset ( $this->_tpl_vars['swoff'] )): ?>
				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Genel Ayarlar
					</a>       
					
					<ul>
						<li><a href="index.php?p=srvrcon">Server Adý & Þifreler</a></li>
						<li><a href="index.php?p=messages">Reklam Mesajlarý</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="index.php?p=motd">Giriþ Yazýsý</a></li>
						<li><a href="index.php?p=installedmaps">Yüklü Mapler</a></li>
						<li><a href="index.php?p=mapengine">Map Listesi</a></li>
						<li><a href="index.php?p=uploadmap">Map Yükle</a></li>
						<!--- <li><a href="index.php?p=clioption">Özel Ayarlar</a></li> --->
						<li><a href="index.php?p=cmdrcon">Rcon Komutu Gönder</a></li>
						<li><a href="index.php?p=reset">Top15 & Server Reset</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						AmxModx (Adminlik)
					</a>       
					
					<ul>
						<li><a href="index.php?p=amxxaddadmin">Admin Ekle</a></li>
						<li><a href="index.php?p=amxxeditadmin">Adminleri Düzenle</a></li> 
						
					</ul>
					
				</li>

				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Model Yüklemeleri
					</a>       
					
					<ul>
						<li><a href="index.php?p=mdlupload&type=pelerin">Pelerin Modeli Yükle</a></li>
						<li><a href="index.php?p=mdlupload&type=head">Þapka Modeli Yükle</a></li>
						<li><a href="index.php?p=mdlupload&type=jailmodel">JailBreak Modeli Yükle</a></li>

					</ul>
					
				</li>
				
				<li>
				
					<a href="index.php?p=plugins" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						 Eklenti Yönetimi 
					</a>  
				</li>
				<li>
					<a href="index.php?p=sxeconf" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Sxei Aç / Kapat
					</a>  
				</li>
				<li>
					<a href="index.php?p=ticket" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Destek Talepleri
					</a>  
				</li>

				<?php endif; ?>
				<li>
					<a href="index.php?p=login&action=logout" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Çýkýþ
					</a>  
				</li>
				
			</ul> <!-- End #main-nav -->
			
	</div></div> 
	<div id="odeme">
	<strong>
	<?php if ($this->_tpl_vars['odeme'] == 'zero'): ?><font style="color:#FF0">Bugün Server Ödeme Günü</font>
	<?php elseif ($this->_tpl_vars['odeme'] == 'toolate'): ?> <script>alert('Sunucu Ödeme Günü Geçti !!! Eðer Ödeme Yaptýysanýz Bizimle Ýletiþime Geçiniz. Þu An Paneli Kullanamazsýnýz')</script><meta http-equiv="refresh" content="0;URL=index.php?p=login&action=logout">
	<?php else: ?><font style="color:white">Bir Sonraki Server Ödemesine <font style="color:#0F0"><?php echo $this->_tpl_vars['odeme']; ?>
</font> Gün Kaldý</font><?php endif; ?>
	<font style="color:white"> - Ipniz : <font style="color:#0F0"><?php echo $this->_tpl_vars['cli_ip']; ?>
</font> Loglandý &nbsp;&nbsp;</font>
	</strong>
	</div>