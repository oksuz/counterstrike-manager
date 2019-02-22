<?php /* Smarty version 2.6.26, created on 2011-03-31 10:45:07
         compiled from plugins_main.tpl */ ?>
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

	<?php if (isset ( $this->_tpl_vars['plugindetails'] ) || isset ( $this->_tpl_vars['pluginalready'] )): ?>
		<?php if ($this->_tpl_vars['plugindetails']['on'] == 'yes'): ?>
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					Eklenti : <strong><?php echo $this->_tpl_vars['plugindetails']['details']['pluginname']; ?>
</strong> Açýldý. Yönleniyor...
				</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		<?php else: ?>
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong><?php echo $this->_tpl_vars['plugindetails']['details']['pluginname']; ?>
</strong> Kapatýldý. Yönleniyor...
		</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		<?php endif; ?>
		
	<?php if (isset ( $this->_tpl_vars['pluginalready'] )): ?>
		<?php if ($this->_tpl_vars['pluginalready'] == '1'): ?>
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong><?php echo $this->_tpl_vars['plugindetails']['details']['pluginname']; ?>
</strong> Zaten Açýk. Yönleniyor...
		</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		<?php elseif ($this->_tpl_vars['pluginalready'] == '0'): ?>
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong><?php echo $this->_tpl_vars['plugindetails']['details']['pluginname']; ?>
</strong> Zaten Kapalý. Yönleniyor...
		</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		<?php endif; ?>
	<?php endif; ?>

<?php else: ?>
<table id="server_durumu" width="640" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="3" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
    <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="3" align="center">
			<strong>Eklenti Yönetimi</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Eklenti</strong></td>
    <td align="center"><strong>Aç / Kapa</strong></td>
    <td align="center"><strong>Durum</strong></td>
    <!--- <td align="center"><strong>Ayarlar</strong></td> --->
  </tr>
  
  <?php if ($this->_tpl_vars['plug'] == 'fail'): ?>

	  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="4" align="center"><strong>Serverýnýz Ýçin Hiç Eklenti Tanýmlý Deðil</strong></td>
	  </tr>
  
  <?php else: ?>
	  <?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php $_from = $this->_tpl_vars['plug']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
	  <?php if ($this->_tpl_vars['bgcolor'] == 'bgacikmavi'): ?>
	  <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><b><?php echo $this->_tpl_vars['list']['pluginname']; ?>
</b><br /><span class="placiklama"><?php echo $this->_tpl_vars['list']['descp']; ?>
</span></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '1'): ?> <a href="?p=plugins&setstatus=0&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"></a> <?php else: ?> <a href="?p=plugins&setstatus=1&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png"></a> <?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '0'): ?> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"> <?php else: ?>  <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png">  <?php endif; ?> </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/preferences_system.png"></a></td> --->
	  </tr>
		<?php $this->assign('bgcolor', 'bgbeyaz'); ?>
	  <?php else: ?>
	   <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><b><?php echo $this->_tpl_vars['list']['pluginname']; ?>
</b><br /><span class="placiklama"><?php echo $this->_tpl_vars['list']['descp']; ?>
</span></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '1'): ?> <a href="?p=plugins&setstatus=0&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"></a> <?php else: ?> <a href="?p=plugins&setstatus=1&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png"></a> <?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '0'): ?> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"> <?php else: ?>  <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png">  <?php endif; ?> </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/preferences_system.png"></a></td> --->
	  </tr>
		<?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
 <?php endif; ?>
		<tr class="bggray">
		<td colspan="3" align="center">
			<?php if (isset ( $this->_tpl_vars['othermodplugins'] )): ?>
				<b>Oynadýðýnýz Map'e Uygun Bir Eklenti Yok</b>
			<?php elseif ($this->_tpl_vars['xpartyplugins'] == 'failed'): ?>
				<b>Oynadýðýnýz Map'e Göre Bir Eklenti Tanýmlanmamýþ.</b>
			<?php elseif ($this->_tpl_vars['xpartyplugins'] != 'failed'): ?>
				<b>Oynadýðýnýz Mod : <?php echo $this->_tpl_vars['xpartyplugins']; ?>
 , Buna Uygun Eklentiler Aþaðýda Listelenmiþtir</b>
			<?php endif; ?>
		</td>
	  </tr>
	  
	 <?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php $_from = $this->_tpl_vars['modplugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
	  <?php if ($this->_tpl_vars['bgcolor'] == 'bgacikmavi'): ?>
	  <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><b><?php echo $this->_tpl_vars['list']['pluginname']; ?>
</b><br /><span class="placiklama"><?php echo $this->_tpl_vars['list']['descp']; ?>
</span></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '1'): ?> <a href="?p=plugins&setstatus=0&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"></a> <?php else: ?> <a href="?p=plugins&setstatus=1&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png"></a> <?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '0'): ?> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"> <?php else: ?>  <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png">  <?php endif; ?> </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/preferences_system.png"></a></td> --->
	  </tr>
		<?php $this->assign('bgcolor', 'bgbeyaz'); ?>
	  <?php else: ?>
	   <tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
		<td><b><?php echo $this->_tpl_vars['list']['pluginname']; ?>
</b><br /><span class="placiklama"><?php echo $this->_tpl_vars['list']['descp']; ?>
</span></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '1'): ?> <a href="?p=plugins&setstatus=0&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"></a> <?php else: ?> <a href="?p=plugins&setstatus=1&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png"></a> <?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['list']['status'] == '0'): ?> <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"> <?php else: ?>  <img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png">  <?php endif; ?> </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid=<?php echo $this->_tpl_vars['list']['id']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/preferences_system.png"></a></td> --->
	  </tr>
		<?php $this->assign('bgcolor', 'bgacikmavi'); ?>
	  <?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
	  
</table>
<br />
<br />
<br />
<table id="server_durumu" width="350" border="0" align="center" cellpadding="3" cellspacing="0">
   <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td width="150" align="center"><strong>Durum Simgesi</strong></td>
    <td align="center"><strong>Açýklama</strong></td>
  </tr>
 <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><img border="0" valign="center" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_pause_red.png"></td>
    <td align="left">Eklenti Kapalý</td>
  </tr>
	 <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><img border="0" valign="center" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/button_play_green.png"></td>
    <td align="left">Eklenti Açýk</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center" colspan="2"><strong>Not:</strong> Yapmýþ Olduðunuz Deðiþiklikler Bir Sonraki Map Deðiþiminde Etkin Olacaktýr.</td>
  </tr>
  </table>
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