<?php /* Smarty version 2.6.26, created on 2011-02-07 12:34:17
         compiled from amxxaddadmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_decode', 'amxxaddadmin.tpl', 52, false),)), $this); ?>
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


	<?php if (isset ( $_POST['addadminbtn'] )): ?>
			<?php if (isset ( $this->_tpl_vars['blankfield'] )): ?>
			
			<div class="notification error png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Bo� Alan Alg�land�. B�t�n Alanlar� Doldurup Tekrar Deneyin <strong> L�tfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=amxxaddadmin">
			
			<?php else: ?>
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Admin : <strong><?php echo $_POST['adminuser']; ?>
</strong> �ifre : <strong><?php echo $_POST['adminpass']; ?>
</strong> Eklendi . <strong>L�tfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="4;URL=index.php?p=amxxeditadmin">
			<?php endif; ?>
		
	<?php elseif (isset ( $_GET['plname'] ) && isset ( $this->_tpl_vars['alreadyadmin'] ) && $this->_tpl_vars['alreadyadmin'] == 'yes'): ?>
			
			<div class="notification error png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Bu Oyuncunun Zaten Adminli�i Mevcut</strong>
						<br />
						Oyuncunun Admin Detaylar�n� D�zenlemek ��in <a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id=<?php echo $this->_tpl_vars['admindetail']['id']; ?>
">T�klay�n</a>
						<br />
						Anasayfaya D�nmek i�in <a href="index.php">T�klay�n</a>
					</div>
				</div>
			
	<?php else: ?>
		<form action="index.php?p=amxxaddadmin" method="post">
		<table id="server_durumu" width="600" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : <?php echo $_SESSION['ip']; ?>
:<?php echo $_SESSION['port']; ?>
</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>Yeni Admin Ekle</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Admin Kullan�c� Ad� : </strong></td>
			<td><input type="text" name="adminuser" onblur="kontrol('adminunser')" id="adminuser" value="<?php if (isset ( $_GET['plname'] )): ?><?php echo ((is_array($_tmp=$_GET['plname'])) ? $this->_run_mod_handler('base64_decode', true, $_tmp) : base64_decode($_tmp)); ?>
<?php endif; ?>" style="width:300px"></td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Admin �ifresi : </strong></td>
			<td><input type="text" id="adminpass" onblur="kontrol('adminpass')" name="adminpass" style="width:300px" value="<?php if (isset ( $_GET['plname'] )): ?><?php  echo rand(100000,999999);  ?><?php endif; ?>"></td>
		  </tr>
		   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>A��klama : </strong></td>
			<td><input type="text" name="aciklama" onblur="kontrol('aciklama')" id="aciklama" value="" style="width:300px"></td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Yetki : </strong></td>
			<td>
			<input type="radio" name="yetki" value="abcdefghijklmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'"/> Server Y�neticisi
			<input type="radio" name="yetki" <?php if (isset ( $_GET['plname'] )): ?>checked="checked"<?php endif; ?> value="abcdefghijkmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'"/> Normal Y�neticisi
			<input type="radio" name="yetki" value="ab" onclick="document.getElementById('ozelalan').style.display='none'"/> Slot
			<input type="radio" name="yetki" value="ozel" onclick="document.getElementById('ozelalan').style.display='table-row'" /> �zel Tan�mla
			</td>
		  </tr>
   <tr id="ozelalan" class="bgbeyaz" style="display:none;" onmouseout="this.className='bgbeyaz'">
    <td colspan="2">
		<table id="ozelkomut" align="center" border="0" cellpadding="0" cellspacing="5">
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[a]" type="checkbox" value="a"></td>
			<td>(a) Dokunuulmazl�k</td>
			<td><input name="custom[b]" type="checkbox" value="b"></td>
			<td>(b) Slot Hakk�</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[c]" type="checkbox" value="c"></td>
			<td>(c) Kickleme ve Kick Men�ye Eri�im</td>
			<td><input name="custom[d]" type="checkbox" value="d"></td>
			<td>(d) Banlama ve Banmen�s�ne Eri�im</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[e]" type="checkbox" value="e"></td>
			<td>(e) Nick De�i�me Slay ve Slap</td>
			<td><input name="custom[f]" type="checkbox" value="f"></td>
			<td>(f) Map ve Mapmen�</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[g]" type="checkbox" value="g"></td>
			<td>(g) Plugin ve Cvar Kontrol�</td>

			<td><input name="custom[h]" type="checkbox" value="h"></td>
			<td>(h) Silah Yasaklama</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[i]" type="checkbox" value="i"></td>
			<td>(i) Tsay Csay Kullanma</td>
			<td><input name="custom[j]" type="checkbox" value="j"></td>
			<td>(j) Oylama Yetkisi</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[k]" type="checkbox" value="k"></td>

			<td>(k) Yetkisi</td>
			<td><input name="custom[l]" type="checkbox" value="l"></td>
			<td>(L) Dikkat : Rcon Komutu Kullanabilme</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >			
			<td><input name="custom[m]" type="checkbox" value="m"></td>
			<td>(m) Heal,gravity,armor,gag,ungag Verebilme</td>
			<td><input name="custom[n]" type="checkbox" value="n"></td>
			<td>(n) Rocket,fire,slay2 Kullanabilme</td></tr>
			
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[o]" type="checkbox" value="o"></td>
			<td>(o) Weapon,revive,noclip,speed Kullanabilme</td>
			<td><input name="custom[p]" type="checkbox" value="p"></td>
			<td>(p) Glow,transfer,badaim,lock,unlock Kullanabilme</td>
			</tr>
			
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >			
			<td><input name="custom[q]" type="checkbox" value="q"></td>
			<td>(q) amx_quit Kullanabilme</td>
			<td><input name="custom[r]" type="checkbox" value="r"></td>
			<td>(r) Kullan�lm�yor</td>
			</tr>
			
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[s]" type="checkbox" value="s"></td>
			<td>(s) Kullan�lm�yor</td>
			<td><input name="custom[t]" type="checkbox" value="t"></td>
			<td>(t) Kullan�lm�yor</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td colspan="2" align="right"><input name="custom[u]" type="checkbox" value="u"></td>
			<td colspan="2" align="left">(u) AmxModx Men�ye Eri�im</td>
			</tr>
			</table>	
	</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('srvrcon').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit3" id="srvrcon" name="addadminbtn" Value="Uygula !" /></td>
  </tr>
  
</table>
</form>
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