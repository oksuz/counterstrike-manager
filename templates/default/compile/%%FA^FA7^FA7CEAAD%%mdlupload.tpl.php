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
							<strong>Dosya Y�klenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Y�klemeye �al��t���n�z Dosya .mdl Uzant�l� De�il ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Se�ilmemi� Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Ba�ar�yla Y�klendi</strong>
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
				<td colspan="2" align="center"><strong>Pelerin Modeli Y�kle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Se�in : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Y�kle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* �nemli : </strong> Y�klemek istenilen model <strong>.mdl</strong> Uzant�l� Olmal�d�r. <br />
				<strong>* �nemli : </strong> Y�kle butonuna bast�ktan sonra <strong>Y�klendi ya da Hata</strong> mesaj� ��kana kadar bekleyin<br />
				<strong>* �nemli : </strong> Modeliniz y�klendikten sonra ge�erli olmas� i�in <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* �nemli : </strong> Y�kledi�iniz modellerde farkl� bir <strong>Ip / Site reklam� tespit edilirse , server�n�z iadesiz geri al�n�r. </strong>
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
							<strong>Dosya Y�klenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Y�klemeye �al��t���n�z Dosya .mdl Uzant�l� De�il ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Se�ilmemi� Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Ba�ar�yla Y�klendi</strong>
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
				<td><strong>Dosya Se�in : </strong></td>
				<td><input type="file" name="mdlfile[ct]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[ct]" value="dontuploadct"> </td>
				
			 </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Jail Terror Modeli</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Se�in : </strong></td>
				<td><input type="file" name="mdlfile[t]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[t]" value="dontuploadt"> </td>
				<input type="hidden" name="dontupload[]" value="noerror" />
			 </tr>
			  
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" onclick="alert('3. Y�kleme ��lemi Bitmeden Ba�ka Bir Yere T�klamay�n');alert('2 . Y�kleme ��lemi Bitmeden Ba�ka Bir Yere T�klamay�n');alert('1. Y�kleme ��lemi Bitmeden Ba�ka Bir Yere T�klamay�n');alert('Y�kleme ��lemini Ba�latmak ��in Tamama T�klay�n')" value="Y�kle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* �nemli : </strong> T�m Alanlar Zorunludur (CT ve T modeli se�ilmelidir) <br />
				<strong>* �nemli : </strong> Y�klemek istenilen model <strong>.mdl</strong> Uzant�l� Olmal�d�r. <br />
				<strong>* �nemli : </strong> Y�kle butonuna bast�ktan sonra <strong>Y�klendi ya da Hata</strong> mesaj� ��kana kadar bekleyin<br />
				<strong>* �nemli : </strong> Modeliniz y�klendikten sonra ge�erli olmas� i�in <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* �nemli : </strong> Y�kledi�iniz modellerde farkl� bir <strong>Ip / Site reklam� tespit edilirse , server�n�z iadesiz geri al�n�r. </strong>
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
							<strong>Dosya Y�klenemedi !!!</strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '2'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Y�klemeye �al��t���n�z Dosya .mdl Uzant�l� De�il ... </strong>
						</div>
					</div>
				<?php elseif ($this->_tpl_vars['mdlerror'] == '3'): ?>
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Se�ilmemi� Olabilir)</strong>
						</div>
					</div>
				<?php endif; ?>
				<?php else: ?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Ba�ar�yla Y�klendi</strong>
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
				<td colspan="2" align="center"><strong>�apka Modeli Y�kle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Se�in : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Y�kle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* �nemli : </strong> Y�klemek istenilen model <strong>.mdl</strong> Uzant�l� Olmal�d�r. <br />
				<strong>* �nemli : </strong> Y�kle butonuna bast�ktan sonra <strong>Y�klendi ya da Hata</strong> mesaj� ��kana kadar bekleyin<br />
				<strong>* �nemli : </strong> Modeliniz y�klendikten sonra ge�erli olmas� i�in <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* �nemli : </strong> Y�kledi�iniz modellerde farkl� bir <strong>Ip / Site reklam� tespit edilirse , server�n�z iadesiz geri al�n�r. </strong>
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