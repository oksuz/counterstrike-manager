<?php /* Smarty version 2.6.26, created on 2011-03-05 23:44:41
         compiled from plugins_cvars.tpl */ ?>
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

<form action="index.php?p=plugins&action=cvars&pluginid=<?php echo $_GET['pluginid']; ?>
" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
   <tr>
    <td align="center" colspan="2" class="bgmavi">Plugin <strong><?php echo $this->_tpl_vars['cvars']['0']['pluginname']; ?>
</strong> Ayarlarý</td>
  </tr>
	<?php $this->assign('say', '0'); ?>
	<?php $_from = $this->_tpl_vars['cvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cvar']):
?>
		<?php if ($this->_tpl_vars['say'] % 2 == 0): ?>
			<?php $this->assign('class', 'bgbeyaz'); ?>
		<?php else: ?>
			<?php $this->assign('class', 'bgacikmavi'); ?>
		<?php endif; ?>
		<tr class="<?php echo $this->_tpl_vars['class']; ?>
" onmouseover="this.className='bgonmouseover'" onmouseout="this.className='<?php echo $this->_tpl_vars['class']; ?>
'">
			<td><b><?php echo $this->_tpl_vars['cvar']['name']; ?>
</b><br /><span class="placiklama"><?php echo $this->_tpl_vars['cvar']['description']; ?>
</span></td>
			<td>
			<input type="hidden" name="c[<?php echo $this->_tpl_vars['say']; ?>
]">
			<input type="hidden" name="c[<?php echo $this->_tpl_vars['say']; ?>
][cvarname]" value="<?php echo $this->_tpl_vars['cvar']['cvar']; ?>
">
			<input type="text" name="c[<?php echo $this->_tpl_vars['say']; ?>
][value]" value="<?php echo $this->_tpl_vars['cvar']['value']; ?>
">
			<input type="hidden" name="c[<?php echo $this->_tpl_vars['say']; ?>
][hidden]" value="<?php echo $this->_tpl_vars['cvar']['value']; ?>
">
			<input type="hidden" name="c[<?php echo $this->_tpl_vars['say']; ?>
][id]" value="<?php echo $this->_tpl_vars['cvar']['id']; ?>
">
			</td>
		</tr>
	<!-- <?php echo $this->_tpl_vars['say']++; ?>
 -->
	<?php endforeach; endif; unset($_from); ?>
	<input type="hidden" name="cvarcfg" value="<?php echo $this->_tpl_vars['cvar']['cvarcfg']; ?>
">
	   <tr>
    <td align="center" colspan="2" style="border:none" class="bgmavi"><input type="submit" name="csubmit" value="gonder"></td>
  </tr>
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>