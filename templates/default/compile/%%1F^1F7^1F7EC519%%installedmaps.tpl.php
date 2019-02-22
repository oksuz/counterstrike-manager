<?php /* Smarty version 2.6.26, created on 2010-10-15 11:07:59
         compiled from installedmaps.tpl */ ?>
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
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
   <tr>
		<td align="center" colspan="2" style="border:none" class="bgbeyaz">
		<?php if (isset ( $_GET['sort'] )): ?>
			<a href="index.php?p=installedmaps">Karýþýk Sýrala</a>
		<?php else: ?>
			<a href="index.php?p=installedmaps&sort=byname">Ýsme Göre Sýrala</a>
		<?php endif; ?>
	</td>
  </tr>
  <?php $this->assign('bgcolor', 'bgmavi'); ?>
  <?php $_from = $this->_tpl_vars['maplist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
  <?php if ($this->_tpl_vars['bgcolor'] == 'bgmavi'): ?>

  <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><?php echo $this->_tpl_vars['list']; ?>
</td>
    <td align="center"><a href="index.php?p=main&op=changemap&cs_map=<?php echo $this->_tpl_vars['list']; ?>
"><b>Aç</b></a></td>
  </tr>
    <?php $this->assign('bgcolor', 'bgbeyaz'); ?>
  <?php else: ?>
    <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><?php echo $this->_tpl_vars['list']; ?>
</td>
	 <td align="center"><a href="index.php?p=main&op=changemap&cs_map=<?php echo $this->_tpl_vars['list']; ?>
"><b>Aç</b></a></td>
  </tr>
    <?php $this->assign('bgcolor', 'bgmavi'); ?>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>