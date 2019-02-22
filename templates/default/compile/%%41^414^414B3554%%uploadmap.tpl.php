<?php /* Smarty version 2.6.26, created on 2010-11-02 12:05:14
         compiled from uploadmap.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
<div id="main-content">		


		<?php if (isset ( $_POST['srv_uploadmap_submit'] ) || isset ( $_POST['sv_mappackage'] )): ?>
			<?php if ($this->_tpl_vars['type'] == 'mapupload'): ?>
				<?php if ($this->_tpl_vars['mapupload'] == 'OK'): ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						 Dosya Yüklendi | Yönleniyor
					</div>
				</div>
				<?php else: ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>  | Yönleniyor
						</div>
					</div>
				<?php endif; ?>
			<?php else: ?>
				<?php if ($this->_tpl_vars['packupload'] == 'filext'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Paket Yüklenemedi !!! Uzanti Zip Deðil</strong>  | Yönleniyor
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['packupload'] == 'fail'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Paket Yüklenemedi !!!</strong>  | Yönleniyor
						</div>
					</div>
				
				<?php else: ?>
					<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						 Paket Yükleme Ýþlemi Baþarýlý | Yönleniyor <br />
						 <?php echo $this->_tpl_vars['response']; ?>

					</div>
				</div>
				<?php endif; ?>
			<?php endif; ?>
		<meta http-equiv="refresh" content="3;URL=index.php?p=uploadmap">
	
<?php else: ?>
<form action="index.php?p=uploadmap" method="post" enctype="multipart/form-data">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Map Yükle</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Dosya Seçin : </strong></td>
    <td><input type="file" name="mapfile" onblur="kontrol('mapfile')" id="mapfile" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Yüklenecek Dizin : </strong></td>
    <td>
	<select name="folder">
		<option value="/">Anadizin
		<option value="maps">Maps
		<option value="sound">Sounds
		<option value="models">Models
		<option value="gfx">Gfx
		<option value="overviews">Overviews
	</select>
	</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Ek Dizin : </strong></td>
    <td><input type="text" name="ekdizin" style="width:300px"></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srv_uploadmap_submit').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srv_uploadmap_submit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srv_uploadmap_submit" name="srv_uploadmap_submit" Value="Yükle !" /></td>
  </tr>
  
</table>
</form>

<form action="?p=uploadmap&package=yes" method="post" enctype="multipart/form-data">
<table id="sv_password" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Ya Da</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">

    <td colspan="2" align="center"><strong>Map Paketi Yükle</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Dosya Seçin (*.zip) : </strong></td>
    <td>		
	<input type="file" name="map_package">
	</td>
  </tr>

  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('sv_mappackage').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('sv_mappackage').className='ynsubmit2'">
 
    <td colspan="2" align="center">
	
	<input type="submit" name="sv_mappackage" id="sv_mappackage" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">

	</td>
	
	
  </tr>
  
   
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2">
	<span style="font-size:10px">
	<strong>* Önemli : </strong> .wad Dosyalarý Genellikle Anadizine Atýlýr<br />
	<strong>* Önemli : </strong> .bsp Dosyalarý Genellikle Maps Dizinine Atýlýr<br />
	<strong>* Önemli : </strong> .vaw Dosyalarý Genellikle Sound Dizinine Atýlýr<br />
	<strong>* Önemli : </strong> Ýndirdiðiniz Mapin Dosyalarý Genel Olarak Klasör Yapýsý Halindedir Ayný Þekilde Uygun Dizinlere Atmanýz Gerekmektedir<br />
	<strong>* Ek Dizin Nedir ? : </strong> Ek dizin indirmiþ olduðunuz mapin içinde ornegin sound/<strong>klasor</strong>/ses.vaw seklidekdir yüklenecek dizin bölümünden soundu ek klasör olarakda <strong>klasor</strong> yazmalýsýnýz	<br />
	<strong>* Map Paketi Nasýl Yüklenir ? : </strong> 	<br />
	</span>
	</td>
  </tr>

  
</table>
	</form>


	<?php endif; ?>



<br />
<br />

		</div> 
		<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>