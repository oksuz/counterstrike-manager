<?php /* Smarty version 2.6.26, created on 2010-10-31 00:37:55
         compiled from cmdrcon.tpl */ ?>
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




<form action="" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Servera Bir Komut Gönder</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Komut : </strong></td>
    <td><input type="text" name="cmd" id="cmd"  style="width:300px"></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srvrcon').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srvrcon" name="sendcmd" Value="Uygula !" /></td>
	
  <?php if (isset ( $this->_tpl_vars['response'] ) && $this->_tpl_vars['response'] != ''): ?>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
  		<div class="notification success png_bg">
			<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
				<?php echo $this->_tpl_vars['response']; ?>

				</div>
			</div>

  <?php endif; ?>
  
</table>
</form>


<br />
<br />

		</div> 
		<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>