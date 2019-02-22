<?php /* Smarty version 2.6.26, created on 2011-03-20 11:07:17
         compiled from ticket.tpl */ ?>
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

	<?php if (isset ( $this->_tpl_vars['info'] )): ?>
		<?php if ($this->_tpl_vars['info'] == 'fail'): ?>
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Bazý Alanlar Boþ Býrakýldý</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		<?php elseif ($this->_tpl_vars['info'] == 'bigger'): ?>
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Yazmýþ Olduðunuz Problem 500 Karakterden Fazla</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		<?php else: ?>
			<div class="notification success png_bg">
			<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Destek Talebiniz Elimize Ulaþtý. En Kýsa Sürede Size Geri Dönüþ Yapýlacaktýr</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		<?php endif; ?>

<?php else: ?>
<form action="index.php?p=ticket" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Yeni Destek Talebi Oluþtur</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Önem Derecesi : </strong></td>
    <td><select name="critical" id="derece" style="width:300px">
	<option value="Düþük" selected="selected">Düþük</option>
	<option value="Orta">Orta</option>
	<option value="Acil">Acil</option>
	</td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Ad Soyad : </strong></td>
    <td><input type="text" id="requestby" name="requestby" style="width:300px" value=""></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Konu : </strong></td>
    <td><input type="text" name="title" id="title" style="width:300px"></td>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td valign="top"><strong>Sorun : </strong></td>
    <td><textarea name="problem" rows="5" cols="5"></textarea></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('ticket_submit').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('ticket_submit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit3" id="ticket_submit" name="ticket_submit" Value="Bildir!" /></td>
  </tr>
  
</table>
</form>

<br />
<br />
<br />

<table id="server_durumu" width="640" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="5" align="center">
			<strong>Son 10 <?php if ($_GET['status'] == 'completed'): ?>Tamamlanmýþ<?php endif; ?> Talebiniz</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Talebi Yapan</strong></td>
	<td align="center"><strong>Konu</strong></td>
    <td align="center"><strong>Aciliyet</strong></td>
    <td align="center"><strong>Son Durum</strong></td>
    <td align="center"><strong>Detay</strong></td>
  
  </tr>
	<?php if ($this->_tpl_vars['request'] == 'fail'): ?>
		<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="5" align="center"><strong>Bekleyen Talebiniz Yok. Tamamlanmýþ Talepler Ýçin  <a href="?p=ticket&status=completed">Týklayýn</a></strong></td>
		</tr>
	<?php else: ?>
		<?php $this->assign('bgcolor', 'bgacikmavi'); ?>
		<?php $_from = $this->_tpl_vars['request']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['req']):
?>
				<?php if ($this->_tpl_vars['bgcolor'] == 'bgacikmavi'): ?>
				<tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
					<td align="center"><?php echo $this->_tpl_vars['req']['requestby']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['req']['title']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['req']['critical']; ?>
</td>
					<td align="center">
						<?php if ($this->_tpl_vars['req']['status'] == '1'): ?>
							Sorumlu Bekleniyor
						<?php elseif ($this->_tpl_vars['req']['status'] == '2'): ?>
							Sorumlu Atandý
						<?php elseif ($this->_tpl_vars['req']['status'] == '3'): ?>
							Sorumlu Problem Ýle Ýlgileniyor
						<?php else: ?>
							Problem Çözüldü
						<?php endif; ?>
					</td>
					<td align="center"><strong><a href="?p=ticket&action=view&ticketid=<?php echo $this->_tpl_vars['req']['id']; ?>
">Detay</a></strong></td>
				</tr>
				<?php $this->assign('bgcolor', 'bgbeyaz'); ?>
				<?php else: ?>
				<?php $this->assign('bgcolor', 'bgbeyaz'); ?>
					<tr class="<?php echo $this->_tpl_vars['bgcolor']; ?>
" onmouseout="this.className='<?php echo $this->_tpl_vars['bgcolor']; ?>
'" onmouseover="this.className='bgonmouseover'">
					<td align="center"><?php echo $this->_tpl_vars['req']['requestby']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['req']['title']; ?>
</td>
					<td align="center"><?php echo $this->_tpl_vars['req']['critical']; ?>
</td>
					<td align="center">
						<?php if ($this->_tpl_vars['req']['status'] == '1'): ?>
							Sorumlu Bekleniyor
						<?php elseif ($this->_tpl_vars['req']['status'] == '2'): ?>
							Sorumlu Atandý
						<?php elseif ($this->_tpl_vars['req']['status'] == '3'): ?>
							Sorumlu Problem Ýle Ýlgileniyor
						<?php else: ?>
							Problem Çözüldü
						<?php endif; ?>
					</td>
					<td align="center"><strong><a href="?p=ticket&action=view&ticketid=<?php echo $this->_tpl_vars['req']['id']; ?>
">Detay</a></strong></td>
				</tr>
				<?php $this->assign('bgcolor', 'bgacikmavi'); ?>
				<?php endif; ?>
				
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
  
  <?php if ($_GET['status'] == 'completed'): ?>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
   <td colspan="5" align="center"><a href="?p=ticket"><strong>Destek Anasayfasýna Dön</strong></a></td>
   </tr>
  <?php endif; ?>
  
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