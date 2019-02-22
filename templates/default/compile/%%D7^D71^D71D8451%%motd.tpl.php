<?php /* Smarty version 2.6.26, created on 2011-03-20 18:24:19
         compiled from motd.tpl */ ?>
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


		<?php if (isset ( $_POST['srv_motd_submit'] )): ?>
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Server Giriþ Yazisi Degiþtirildi. <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=motd">
	
<?php else: ?>
<form action="index.php?p=motd" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Server Giriþ Yazýsý (motd.txt)</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    
    <td colspan="2"><textarea cols="40" rows="20" name="txtmotd"><?php echo $this->_tpl_vars['content']; ?>
</textarea></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('picupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('picupload').className='ynsubmit2'">
    <td><strong>Resim Yüklemek Ýçin : </strong></td>
    <td><input type="button" id="picupload" name="picupload" class="ynsubmit" onclick="javascript:window.open('?p=motd&action=uploadpic','mywin','left=50,top=50,width=450,height=300,toolbar=0,resizable=0')" value="Týklayýn">
</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Not : </strong> Þu Anda Serveriniza Ýlk Giriþte Karþýnýza Gelecek Olan Ekraný Düzenliyorsunuz. </span><br />
	<span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srv_motd_submit').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srv_motd_submit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srv_motd_submit" name="srv_motd_submit" Value="Uygula!" /><div id="info"></div></td>
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