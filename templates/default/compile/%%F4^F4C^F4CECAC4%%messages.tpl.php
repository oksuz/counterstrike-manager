<?php /* Smarty version 2.6.26, created on 2010-09-01 10:50:43
         compiled from messages.tpl */ ?>
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

			<?php if (isset ( $_POST['messages_submit'] )): ?>
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Reklam Mesajlarý Deðiþtirildi <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=messages">
	
<?php else: ?>

<form action="index.php?p=messages" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Reklam Mesajlari</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Reklam Mesajý #1 : </strong></td>
    <td><input type="text" name="message[]"   disabled="disabled" value="<?php echo $this->_tpl_vars['messages']['imessage'][0]; ?>
" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Reklam Mesajý #2 </strong></td>
    <td><input type="text"  name="message[]" style="width:300px" value="<?php echo $this->_tpl_vars['messages']['imessage'][1]; ?>
"></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Reklam Mesajý #3 : </strong></td>
    <td><input type="text" name="message[]"  value="<?php echo $this->_tpl_vars['messages']['imessage'][2]; ?>
" style="width:300px"></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Reklam Mesajý #4 </strong></td>
    <td><input type="text"  name="message[]" style="width:300px" value="<?php echo $this->_tpl_vars['messages']['imessage'][3]; ?>
"></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Alt Yazi Mesaji : </strong></td>
    <td><input type="text" name="submessage[message]"   value="<?php echo $this->_tpl_vars['messages']['scrollmsg'][1]; ?>
" style="width:300px">
	<input type="text" name="submessage[second]" style="width:20px" value="<?php echo $this->_tpl_vars['messages']['scrollmsg'][2]; ?>
" style="width:300px"> Sn.
	</td>
  </tr>
    <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Önemli : </strong> Bu iþlemde Türkçe karakter kullanmayýnýz (Ý,Ð,Ü,Þ,Ç,Ö) . <br />  &nbsp;&nbsp;&nbsp; Þayet kullanýrsanýz otomatik olarak ingilizce karakter haline gelecektir. </span><br />
	<span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>

     <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srvrcon').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" onclick="this.style.visibility='hidden'" id="srvrcon" name="messages_submit" Value="Uygula !" /></td>
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