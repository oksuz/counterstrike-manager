<?php /* Smarty version 2.6.26, created on 2011-04-08 22:41:52
         compiled from main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'main.tpl', 198, false),array('modifier', 'base64_encode', 'main.tpl', 199, false),)), $this); ?>
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

		
		<div id="main-content" class="content">
		<?php if (! isset ( $this->_tpl_vars['swoff'] )): ?>
						<?php if (isset ( $this->_tpl_vars['islem'] ) && $this->_tpl_vars['islem'] == 'changemap'): ?>
					<?php if (isset ( $_REQUEST['cs_map'] )): ?>
						<?php if (isset ( $this->_tpl_vars['failed'] )): ?>
								<div class="notification error png_bg">
								<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div align="center">
									<strong><?php echo $_REQUEST['cs_map']; ?>
</strong> Serverda Bulunmadýðýndan Açýlamýyor ! | Yönleniyor
								</div>
							</div>				
						<?php else: ?>
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Harita Deðiþtirme Ýþleminiz Baþarý Ýle Gerçekleþtir. Açýlan Harita <strong><?php echo $_REQUEST['cs_map']; ?>
</strong> | Yönleniyor
							</div>
						</div>
						<?php endif; ?>
						<meta http-equiv="refresh" content="3;URL=index.php">
					<?php endif; ?>
				<?php endif; ?>

				<?php if (isset ( $this->_tpl_vars['islem'] ) && $this->_tpl_vars['islem'] == 'createpw'): ?>
					<?php if (isset ( $_POST['sv_password'] )): ?>
							<div class="notification success png_bg">
							<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Þifre Deðiþtirme Ýþlemi Tamam . sv_password :  <strong><?php echo $_POST['sv_password']; ?>
</strong> | Yönleniyor
							</div>
						</div>
						<meta http-equiv="refresh" content="3;URL=index.php">
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if (isset ( $_GET['op'] ) && $_GET['op'] == 'removepw'): ?>
					<div class="notification success png_bg">
							<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Þifre Baþarý Ýle Kaldýrýldý. | Yönleniyor
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				<?php endif; ?>
				
				<?php if (isset ( $this->_tpl_vars['islem'] ) && $this->_tpl_vars['islem'] == 'kick'): ?>
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Kullanýcý : <strong><?php echo $this->_tpl_vars['uname']; ?>
</strong> Kicklendi | Yönleniyor.
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				<?php endif; ?>
				
				<?php if (isset ( $this->_tpl_vars['islem'] ) && $this->_tpl_vars['islem'] == 'ban'): ?>
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Kullanýcý : <strong><?php echo $this->_tpl_vars['uname']; ?>
 - <?php echo $this->_tpl_vars['ip']; ?>
</strong> 999 Dakika Ban | Yönleniyor.
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				<?php endif; ?>
				
		<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $this->_tpl_vars['info']['ip']; ?>
</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>SERVER DURUMU</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server Adý : </strong></td>
			<td><?php echo $this->_tpl_vars['info']['name']; ?>
</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Oynanan Harita : </strong></td>
			<td><strong><?php echo $this->_tpl_vars['info']['map']; ?>
</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Harita Kalan Süre : </strong></td>
			<td><?php echo $this->_tpl_vars['info']['kalan_sure']; ?>
</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Harita Süresi :</strong></td>
			<td><?php echo $this->_tpl_vars['info']['timelimit']; ?>
</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Round Süresi : </strong></td>
			<td><?php echo $this->_tpl_vars['info']['round_suresi']; ?>
</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server Uptime : </strong></td>
			<td><?php echo $this->_tpl_vars['info']['uptime']; ?>
 Dakikada | <?php echo $this->_tpl_vars['info']['oyuncu']; ?>
 Player</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Sxei Durumu : </strong></td>
			<td><?php if ($this->_tpl_vars['info']['sxei'] == 1): ?>
				<font color="green"><b>Açýk</b></a>
				<?php elseif ($this->_tpl_vars['info']['sxei'] == 0): ?>
				<font color="orange"><b>Opsiyonel</b></a>	
				<?php else: ?>
				<font color="red"><b>Kapalý</b></a>	
			<?php endif; ?></td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Oyuncular : </strong></td>
			<td> <?php echo $this->_tpl_vars['info']['activeplayers']; ?>
 / <?php echo $this->_tpl_vars['info']['maxplayers']; ?>
 </td>
		  </tr>
		</table>

		<table id="sv_password" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">&nbsp;</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>Server Þifresi</strong> (sv_password)</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server Þifresi : </strong></td>
			<td><?php if ($this->_tpl_vars['info']['swpw'] == 'yok'): ?>
				Serverda Þifre Yok !
				<?php else: ?>
				<strong><?php echo $this->_tpl_vars['info']['swpw']; ?>
</strong> <a href="?p=main&op=removepw" class="linkz">Þifreyi Kaldýr !</a>
			<?php endif; ?>
			</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('svpass').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('svpass').className='ynsubmit2'">
			<td><strong>Þifre Oluþtur : </strong></td>
			<td><form action="?p=main&op=createpw" method="post">
			<input type="text" name="sv_password" id="sv_password_input">
			<input type="submit" name="sv_passwordbtn" id="svpass" value="Uygula!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
			</form>
			</td>
		  </tr>
		  
		</table>

		<table id="cs_maps" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td  align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">&nbsp;</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>Harita Ayarlarý</strong> (maps)</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('cs_map').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('cs_map').className='ynsubmit2'">
			<td width="215"><strong>Harita Aç : </strong></td>
			<td align="right">
				<form action="?op=changemap" method="post">
				<input type="text" name="cs_map">
				<input type="submit" id="cs_map" value="Uygula!" class="ynsubmit3" onmouseout="this.className='ynsubmit3'" onmouseover="this.className='ynsubmit2'">
				</form>
			</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('mapupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('mapupload').className='ynsubmit2'">
			<td><strong>Harite Yükle : </strong></td>
			<td align="right">
				Harita Yüklemek Ýçin <input type="button" id="mapupload" name="mapupload" class="ynsubmit" onclick="window.location.href='?p=uploadmap'" value="Týklayýn">
			</td>
		  </tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('maplist').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('maplist').className='ynsubmit2'">
			<td><strong>Harita Listesi : </strong></td>
			<td align="right">
				Harita Listesini Görmek Ýçin <input type="button" id="maplist" name="maplist" class="ynsubmit3" onclick="document.location.href='index.php?p=installedmaps'" value="Týklayýn">
			</td>
		  </tr>
		</table>


		<table id="playerstable" width="600" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td  align="center" colspan="5" style="border:none" class="bgbeyaz"><span class="serverip">&nbsp;</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="5" align="center"><strong>Player </strong></td>
		  </tr>

			<tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td align="center"><b>Nick</b></td>
			<td align="center"><b>Kick / Ban</b></td>
			<td align="center"><b>Frag</b></td>
			<td align="center"><b>Ping</b></td>
			<td align="center"><b>Ip</b></td>
			</tr>
			<?php $this->assign('say', '0'); ?>
			<?php $_from = $this->_tpl_vars['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pl']):
?>
			<?php if ($this->_tpl_vars['say'] % 2 == 0): ?>
				<?php $this->assign('class', 'bgturuncu'); ?>
			<?php else: ?>
				<?php $this->assign('class', 'bgacikmavi'); ?>
			<?php endif; ?>
			<tr class="<?php echo $this->_tpl_vars['class']; ?>
" onmouseover="this.className='bgonmouseover'" onmouseout="this.className='<?php echo $this->_tpl_vars['class']; ?>
'">
			<td><?php echo $this->_tpl_vars['pl']['name']; ?>
<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['pl']['name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['admin'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) )): ?> <img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/star031.png" title="Bu Oyuncu Admin" /> <?php endif; ?><?php endforeach; endif; unset($_from); ?></td>
			<td align="center"><a href="?op=kick&player=<?php echo $this->_tpl_vars['pl']['id']; ?>
&uname=<?php echo ((is_array($_tmp=$this->_tpl_vars['pl']['name'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
" onclick="return confirm('Kullanýcýyý Gerçekten Kicklemek Ýstiyor musun ?')"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/kick.png" /></a> <a onclick="return confirm('(<?php echo $this->_tpl_vars['pl']['adress']; ?>
) Kullanýcýyý Gerçekten Banlamak Ýstiyor musun ?')" href="?op=ban&ip=<?php echo ((is_array($_tmp=$this->_tpl_vars['pl']['adress'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
&uname=<?php echo ((is_array($_tmp=$this->_tpl_vars['pl']['name'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/ban.png" /></a> <a href="?p=amxxaddadmin&plname=<?php echo ((is_array($_tmp=$this->_tpl_vars['pl']['name'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : base64_encode($_tmp)); ?>
"><img border="0" src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/adminekle.png" /> </td>
			<td align="center"><b>[<?php echo $this->_tpl_vars['pl']['frag']; ?>
]</b></td>
			<td align="center"><?php echo $this->_tpl_vars['pl']['ping']; ?>
</td>
			<td align="right"><?php echo $this->_tpl_vars['pl']['adress']; ?>
</td>
			</tr>
			<!-- <?php echo $this->_tpl_vars['say']++; ?>
 -->
			<?php endforeach; endif; unset($_from); ?>
		</table>
<?php else: ?>
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					<strong>Serverýnýz Kapalý Görünüyor Ya Da Rcon Þifreniz Hatalý Server Yöneticinize Baþvurun . Bu Durumu Hemen Bildirmek Ýçin Týklayýn <a href="index.php?p=swoff">Buraya</a> Týklayarak Sayfayý Yenileyin<br />
				</strong>
					</div>
			</div>
					
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