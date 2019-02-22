<?php /* Smarty version 2.6.26, created on 2010-12-29 16:16:34
         compiled from amxxeditadmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'addslashes', 'amxxeditadmin.tpl', 41, false),)), $this); ?>
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

<form action="index.php?p=motd" method="post">
<table id="server_durumu" width="640" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="6" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
    <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="6" align="center">
			<strong>Adminleri Düzenle</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Admin</strong></td>
    <td align="center"><strong>Þifre</strong></td>
    <td align="center"><strong>Yetki</strong></td>
    <td align="center"><strong>Açýklama</strong></td>
    <td align="center"><strong>Düzenle</strong></td>
    <td align="center"><strong>Sil</strong></td>
  </tr>
  
  <?php if ($this->_tpl_vars['admin'] == 'fail'): ?>

	  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="6" align="center"><strong>Serverda Admin Tanýmlý Deðil</strong></td>
	  </tr>
  
  <?php else: ?>
	  <?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php $_from = $this->_tpl_vars['admin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
	  <?php if ($this->_tpl_vars['bgcolor'] == 'bgacikmavi'): ?>
	  <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><?php echo $this->_tpl_vars['list']['user']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['pass']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['access']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['comment']; ?>
</td>
		<td align="center"><a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/admin_edit.png"></a></td>
		<td align="center"><a onclick="return confirm('Admin <?php echo ((is_array($_tmp=$this->_tpl_vars['list']['user'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
 silinecek Onaylýyor Musunuz ?')"  href="index.php?p=amxxeditadmin&action=amxxeditadmin_delete&id=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/admin_delete.png"></a></td>
	  </tr>
		<?php $this->assign('bgcolor', 'bgbeyaz'); ?>
	  <?php else: ?>
	   <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><?php echo $this->_tpl_vars['list']['user']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['pass']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['access']; ?>
</td>
		<td><?php echo $this->_tpl_vars['list']['comment']; ?>
</td>
		<td align="center"><a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/admin_edit.png"></a></td>
		<td align="center"><a onclick="return confirm('Admin <?php echo ((is_array($_tmp=$this->_tpl_vars['list']['user'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
 silinecek Onaylýyor Musunuz ?')" href="index.php?p=amxxeditadmin&action=amxxeditadmin_delete&id=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/admin_delete.png"></a></td>
	  </tr>
		<?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
 <?php endif; ?>
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>