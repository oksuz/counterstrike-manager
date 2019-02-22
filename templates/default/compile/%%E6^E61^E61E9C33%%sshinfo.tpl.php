<?php /* Smarty version 2.6.26, created on 2010-11-10 09:35:11
         compiled from admin/sshinfo.tpl */ ?>
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

		<div id="main-content" class="content">
		
		<?php if (isset ( $this->_tpl_vars['seted'] )): ?>
			<?php if ($this->_tpl_vars['seted'] == 'no'): ?>
			   <div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Güncelleme Ýþlemi Baþarýlý Oldu</strong>
					</div>
				</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['seted'] == 'y'): ?>
			   <div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Boþ Alanlar Algýlandý</strong>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		
		<form action="" method="get" />
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Ssh Bilgileri / Ekle Düzenle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>SSH Takma Adý : </strong></td>
				<td>
				<input type="hidden" name="p" value="admin_sshinfo" />
				<select name="sshid" onchange="document.forms[0].submit()">
				<option value="" seleceted> ------------ </option>
				<?php $_from = $this->_tpl_vars['ssh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ss']):
?>
				<option value="<?php echo $this->_tpl_vars['ss']['id']; ?>
"><?php echo $this->_tpl_vars['ss']['grup']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select> 
				<a href="index.php?p=admin_sshinfo&action=sshinfoadd">Ekle</a>
				</td>
			  </tr>
			  <?php if (isset ( $this->_tpl_vars['sshedit'] ) && ! isset ( $_POST['sshsubmit'] )): ?>
				  </form>
				  <form action="" method="post" />
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><strong>Ssh Bilgisi Düzenleniyor (<?php echo $this->_tpl_vars['sshinfo']['grup']; ?>
) </strong></td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Username : </strong></td>
					<td><input type="text" name="sshusername" value="<?php echo $this->_tpl_vars['sshinfo']['sshuser']; ?>
" />  </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Password : </strong></td>
					<td><input type="password" name="sshpass" value="<?php echo $this->_tpl_vars['sshinfo']['sshpass']; ?>
" /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH IP : </strong></td>
					<td><input type="text" name="sship" value="<?php echo $this->_tpl_vars['sshinfo']['ip']; ?>
" /> </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Port : </strong></td>
					<td><input type="text" name="sshport" value="<?php echo $this->_tpl_vars['sshinfo']['port']; ?>
" /> </td>
				  </tr>
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				  <input type="hidden" name="sshid" value="<?php echo $this->_tpl_vars['sshinfo']['id']; ?>
" />
					<td colspan="2" align="center"><input type="submit" name="sshsubmit" value="Güncelle" /> </td>
				  </tr>
			  <?php endif; ?>
			  
			</table>
			
		</form>





<br />
<br />

		</div> 
		<div class="clear"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>