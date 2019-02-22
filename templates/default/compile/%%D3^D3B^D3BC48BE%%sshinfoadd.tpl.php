<?php /* Smarty version 2.6.26, created on 2010-11-07 21:35:33
         compiled from admin/sshinfoadd.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main-content" class="content"> <form action="" method="post" />
		
		<?php if (isset ( $this->_tpl_vars['blankfield'] )): ?>
				<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Boþ Alan Algýlandý</strong>
					</div>
				</div>
			<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['sample'] )): ?>
				<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>SSH Takma Adýný Deðiþtirerek Tekrar Deneyin</strong>
					</div>
				</div>
		<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['inserted'] )): ?>
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>SSH Bilgisi Eklendi</strong>
					</div>
				</div>
		<?php endif; ?>
		
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
				<tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><strong>Ssh Bilgisi Ekle </strong></td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Username : </strong></td>
					<td><input type="text" name="sshusername"  />  </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Password : </strong></td>
					<td><input type="text" name="sshpass"  /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH IP : </strong></td>
					<td><input type="text" name="sship"  /> </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Port : </strong></td>
					<td><input type="text" name="sshport"  /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Takma Adý : </strong></td>
					<td><input type="text" name="sshgrup"  /> </td>
				  </tr>
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><input type="submit" name="sshadd" value="Ekle" /> </td>
				 </tr>
				</table>
				
<br />
<br />

		</div> 
		<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>