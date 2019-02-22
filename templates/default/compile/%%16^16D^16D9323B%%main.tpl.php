<?php /* Smarty version 2.6.26, created on 2010-11-07 16:39:58
         compiled from admin/main.tpl */ ?>
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
		<form action="" method="post" target="_blank" />
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Yönetim Paneli</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Bir Serveri Yönet</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>ServerIP : </strong></td>
				<td><select name="servermanage" onchange="document.forms[0].submit()">
				<option value="" seleceted> ------------ </option>
				<?php $_from = $this->_tpl_vars['ips']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ip']):
?>
				<option value="<?php echo $this->_tpl_vars['ip']['ip']; ?>
"><?php echo $this->_tpl_vars['ip']['ip']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select> 
				</td>
			  </tr>
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