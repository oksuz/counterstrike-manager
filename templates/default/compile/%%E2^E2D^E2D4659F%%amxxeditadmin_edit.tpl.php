<?php /* Smarty version 2.6.26, created on 2010-10-31 01:35:33
         compiled from amxxeditadmin_edit.tpl */ ?>
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


		<?php if (isset ( $_POST['editadminbtn'] )): ?>
			<?php if (isset ( $this->_tpl_vars['blankfield'] )): ?>
			
			<div class="notification error png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Boþ Alan Algýlandý. Bütün Alanlarý Doldurup Tekrar Deneyin <strong> Lütfen Bekleyiniz.
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=amxxaddadmin">
			
			<?php else: ?>
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="<?php echo $this->_tpl_vars['config']['img_dir']; ?>
/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Admin Düzenleme Ýþlemi Baþarýlý. <strong>Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=amxxeditadmin">
			<?php endif; ?>
<?php else: ?>
<form action="" method="post">
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
    <td><strong>Admin Kullanýcý Adý : </strong></td>
    <td><input type="text" name="adminuser" id="adminuser" value="<?php echo $this->_tpl_vars['admin']['user']; ?>
" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Admin Þifresi : </strong></td>
    <td><input type="text" id="adminpass" name="adminpass" style="width:300px" value="<?php echo $this->_tpl_vars['admin']['pass']; ?>
"></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Açýklama : </strong></td>
    <td><input type="text" name="aciklama" id="aciklama" value="<?php echo $this->_tpl_vars['admin']['comment']; ?>
" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Yetki : </strong></td>
	<td>
	<input type="radio" name="yetki" value="abcdefghijklmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'" <?php if ($this->_tpl_vars['admin']['access'] == 'abcdefghijklmnopqrstu'): ?> checked <?php endif; ?> /> Server Yöneticisi
	<input type="radio" name="yetki" value="abcdefghijkmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'" <?php if ($this->_tpl_vars['admin']['access'] == 'abcdefghijkmnopqrstu'): ?> checked <?php endif; ?> /> Normal Yöneticisi
	<input type="radio" name="yetki" value="ab" onclick="document.getElementById('ozelalan').style.display='none'" <?php if ($this->_tpl_vars['admin']['access'] == 'ab'): ?> checked <?php endif; ?> /> Slot
	<input type="radio" name="yetki" value="ozel" onclick="document.getElementById('ozelalan').style.display='table-row'" /> Özel Tanýmla
	</td>
  </tr>
   <tr id="ozelalan" class="bgbeyaz" style="display:none;" onmouseout="this.className='bgbeyaz'">
    <td colspan="2">
		<table id="ozelkomut" align="center" border="0" cellpadding="0" cellspacing="5">
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[a]" type="checkbox" value="a"></td>
			<td>(a) Dokunuulmazlýk</td>
			<td><input name="custom[b]" type="checkbox" value="b"></td>
			<td>(b) Slot Hakký</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[c]" type="checkbox" value="c"></td>
			<td>(c) Kickleme ve Kick Menüye Eriþim</td>
			<td><input name="custom[d]" type="checkbox" value="d"></td>
			<td>(d) Banlama ve Banmenüsüne Eriþim</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[e]" type="checkbox" value="e"></td>
			<td>(e) Nick Deðiþme Slay ve Slap</td>
			<td><input name="custom[f]" type="checkbox" value="f"></td>
			<td>(f) Map ve Mapmenü</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[g]" type="checkbox" value="g"></td>
			<td>(g) Plugin ve Cvar Kontrolü</td>

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
			<td>(r) Kullanýlmýyor</td>
			</tr>
			
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td><input name="custom[s]" type="checkbox" value="s"></td>
			<td>(s) Kullanýlmýyor</td>
			<td><input name="custom[t]" type="checkbox" value="t"></td>
			<td>(t) Kullanýlmýyor</td>
			</tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'" >
			<td colspan="2" align="right"><input name="custom[u]" type="checkbox" value="u"></td>
			<td colspan="2" align="left">(u) AmxModx Menüye Eriþim</td>
			</tr>
			</table>	
	</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('srvrcon').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="hidden" name="admin_id" value="<?php echo $this->_tpl_vars['admin']['id']; ?>
"><input type="submit" class="ynsubmit3" id="srvrcon" name="editadminbtn" Value="Uygula !" /></td>
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