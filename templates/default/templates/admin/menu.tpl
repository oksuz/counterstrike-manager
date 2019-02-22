<div id="header_logo"><img src="{$config.img_dir}/okdp.jpg" /></div>
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo <a href="#"><img id="logo" src="{$config.img_dir}/logo.png" alt="Simpla Admin logo" /></a>(221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="?p=admin_main" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Anasayfa
					</a>  
				</li>

				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Server Yönetimi
					</a>       
					<ul>
						<li><a href="index.php?p=admin_sshinfo">Server SSH Bilgileri</a></li>
						<li><a href="index.php?p=admin_serveradd">Server Ekle</a></li>
						<li><a href="index.php?p=admin_useradd">Kullanýcý Ekle</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="index.php?p=admin_logobanner">Logo ve Banner</a></li>
					</ul>

				</li>
				
				<li>
					<a href="?p=login&action=logout" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Çýkýþ
					</a>  
				</li>
				
			</ul> <!-- End #main-nav -->
			
	</div></div> 