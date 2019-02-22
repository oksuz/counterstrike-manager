<?php /* Smarty version 2.6.26, created on 2010-10-31 01:31:27
         compiled from reset.tpl */ ?>
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

	<?php if (isset ( $_GET['action'] )): ?>
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Ýþlem 
						<?php if ($_GET['action'] == 'top15reset'): ?>
							<strong>Top 15 Sýfýrlama</strong> Baþarýlý
						<?php elseif ($_GET['action'] == 'serverreset'): ?>
							<strong>Server Reset</strong> Baþarýlý
						<?php elseif ($_GET['action'] == 'clearbanned'): ?>
							<strong>Banlý Ýpleri Temizle</strong> Baþarýlý
						<?php else: ?>
							Bilinmeyen Ýþlem !!!
						<?php endif; ?>
					</div>
			</div>
	<?php endif; ?>

<form action="" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Reset</strong></td>
  </tr>
 <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('serverreset').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('serverreset').className='ynsubmit2'">
    <td width="150" align="right"><strong>Server Restart : </strong></td>
    <td align="center"><input type="button" class="ynsubmit3" onclick="window.location.href='index.php?p=reset&action=serverreset'" value="Uygula" id="serverreset" name="serverreset" /></td>
  </tr>
  
 <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('top15reset').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('top15reset').className='ynsubmit2'">
    <td  align="right"><strong>Top15 Sýfýrla : </strong></td>
    <td align="center"><input type="button" class="ynsubmit" onclick="window.location.href='index.php?p=reset&action=top15reset'" value="Uygula" id="top15reset" name="top15reset" /></td>
  </tr>
  
 <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('clearbanned').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('clearbanned').className='ynsubmit2'">
    <td align="right"><strong>Banlý IPleri Temizle : </strong></td>
    <td align="center"><input type="button" class="ynsubmit3" onclick="window.location.href='index.php?p=reset&action=clearbanned'" value="Uygula" id="clearbanned" name="clearbanned" /></td>
  </tr>

  
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