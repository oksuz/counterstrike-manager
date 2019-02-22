<?php /* Smarty version 2.6.26, created on 2011-04-16 19:09:50
         compiled from mdlupload.tpl */ ?>
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
<?php if ($_GET['type'] == 'pelerin'): ?>
	<?php if (isset ( $_POST['modelupload'] )): ?>
			<?php if (isset ( $this->_tpl_vars['mdlerror'] )): ?>
				<?php if ($this->_tpl_vars['mdlerror'] == '1'): ?>
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
			<form action="index.php?p=mdlupload&type=pelerin" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Pelerin Modeli Yükle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
				</span>
				</td>
			  </tr>
			</table>
			</form>
		<?php elseif ($_GET['type'] == 'jailmodel'): ?>
			
		<?php if (isset ( $_POST['modelupload'] )): ?>
			<?php if (isset ( $this->_tpl_vars['mdlerror'] )): ?>
				<?php if ($this->_tpl_vars['mdlerror'] == '1'): ?>
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
			
		<form action="index.php?p=mdlupload&type=jailmodel" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Jail CT Modeli</strong></td>
			  </tr>
			  
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile[ct]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[ct]" value="dontuploadct"> </td>
				
			 </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Jail Terror Modeli</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile[t]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[t]" value="dontuploadt"> </td>
				<input type="hidden" name="dontupload[]" value="noerror" />
			 </tr>
			  
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" onclick="alert('3. Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('2 . Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('1. Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('Yükleme Ýþlemini Baþlatmak Ýçin Tamama Týklayýn')" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Tüm Alanlar Zorunludur (CT ve T modeli seçilmelidir) <br />
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
				</span>
				</td>
			  </tr>

			</table>
			</form>
		<?php elseif ($_GET['type'] == 'head'): ?>
			<?php if (isset ( $_POST['modelupload'] )): ?>
				<?php if (isset ( $this->_tpl_vars['mdlerror'] )): ?>
					<?php if ($this->_tpl_vars['mdlerror'] == '1'): ?>
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
			<form action="index.php?p=mdlupload&type=head" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Þapka Modeli Yükle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
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