{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		


	{if isset($smarty.post.addadminbtn)}
			{if isset($blankfield)}
			
			<div class="notification error png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Boþ Alan Algýlandý. Bütün Alanlarý Doldurup Tekrar Deneyin <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=amxxaddadmin">
			
			{else}
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Admin : <strong>{$smarty.post.adminuser}</strong> Þifre : <strong>{$smarty.post.adminpass}</strong> Eklendi . <strong>Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="4;URL=index.php?p=amxxeditadmin">
			{/if}
		
	{elseif isset($smarty.get.plname) && isset($alreadyadmin) && $alreadyadmin eq 'yes'}
			
			<div class="notification error png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Bu Oyuncunun Zaten Adminliði Mevcut</strong>
						<br />
						Oyuncunun Admin Detaylarýný Düzenlemek Ýçin <a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id={$admindetail.id}">Týklayýn</a>
						<br />
						Anasayfaya Dönmek için <a href="index.php">Týklayýn</a>
					</div>
				</div>
			
	{else}
		<form action="index.php?p=amxxaddadmin" method="post">
		<table id="server_durumu" width="600" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>Yeni Admin Ekle</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Admin Kullanýcý Adý : </strong></td>
			<td><input type="text" name="adminuser" onblur="kontrol('adminunser')" id="adminuser" value="{if isset($smarty.get.plname)}{$smarty.get.plname|base64_decode}{/if}" style="width:300px"></td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Admin Þifresi : </strong></td>
			<td><input type="text" id="adminpass" onblur="kontrol('adminpass')" name="adminpass" style="width:300px" value="{if isset($smarty.get.plname)}{php} echo rand(100000,999999); {/php}{/if}"></td>
		  </tr>
		   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Açýklama : </strong></td>
			<td><input type="text" name="aciklama" onblur="kontrol('aciklama')" id="aciklama" value="" style="width:300px"></td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Yetki : </strong></td>
			<td>
			<input type="radio" name="yetki" value="abcdefghijklmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'"/> Server Yöneticisi
			<input type="radio" name="yetki" {if isset($smarty.get.plname)}checked="checked"{/if} value="abcdefghijkmnopqrstu" onclick="document.getElementById('ozelalan').style.display='none'"/> Normal Yöneticisi
			<input type="radio" name="yetki" value="ab" onclick="document.getElementById('ozelalan').style.display='none'"/> Slot
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
    <td colspan="2" align="center"><input type="submit" class="ynsubmit3" id="srvrcon" name="addadminbtn" Value="Uygula !" /></td>
  </tr>
  
</table>
</form>
	{/if}



<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}