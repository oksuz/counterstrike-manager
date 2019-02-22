<?php /* Smarty version 2.6.26, created on 2011-03-30 21:39:56
         compiled from srvrcon.tpl */ ?>
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

		<?php if (isset ( $_POST['rconpass'] )): ?>
			<?php if (isset ( $this->_tpl_vars['rakam'] )): ?>
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					<strong>Server Adý Rakam Ýçeremez !!!</strong> Yönleniyor ... 
					<meta http-equiv="refresh" content="3;URL=index.php?p=srvrcon">
				</div>
			</div>	
			<?php else: ?>
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Server Adý ve Þifreniz Deðiþtirildi. <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=srvrcon">
			<?php endif; ?>
			
<?php else: ?>
<form action="index.php?p=srvrcon" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Server Adý ve Rcon Þifresi</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Server Adý : </strong></td>
    <td><input type="text" name="servername" onblur="kontrol('servername')" id="servername" value="<?php echo $this->_tpl_vars['info']['hostname']; ?>
" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Rcon Þifresi : </strong></td>
    <td><input type="text" id="rconpass" onblur="kontrol('rconpass')" name="rconpass" style="width:300px" value="<?php echo $this->_tpl_vars['info']['rconpass']; ?>
"></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Önemli : </strong> Server Adýnda Türkçe Karakter ve Reklam Ýçeren Kelimeler Kullanamazsýnýz. <br />  &nbsp;&nbsp;&nbsp; Bu Tip Bir Davranýþta Serverýnýz Ýadesi Olmaksýzýn Kapatýlýr. </span><br />
	<span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srvrcon').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srvrcon" name="srv_rcon_submit" Value="Uygula !" /></td>
  </tr>
  
</table>
</form>
<br />
<br />
<form action="index.php?p=srvrcon" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Panel Kullanýcý Adý ve Þifresi</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Kullanýcý Adý : </strong></td>
    <td><input type="text" name="pusername" disabled="disabled" id="pusername" value="<?php echo $this->_tpl_vars['uinfo']['username']; ?>
" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Panel Þifresi : </strong></td>
    <td><input type="text" id="ppassword" name="ppassword" style="width:300px" value="<?php echo $this->_tpl_vars['uinfo']['password']; ?>
"></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Panelden Çýkýþ Yapacaksýnýz. Yeni Þifrenizi Kullanarak Tekrar Giriþ Yapýn</span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('changeppass').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('changeppass').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="changeppass" name="changeppass" Value="Uygula !" /></td>
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