{include file=header.tpl}
{include file=menu.tpl}

		
		<div id="main-content" class="content">
		{if !isset($swoff)}
						{if isset($islem) && $islem eq 'changemap'}
					{if isset($smarty.request.cs_map)}
						{if isset($failed)}
								<div class="notification error png_bg">
								<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div align="center">
									<strong>{$smarty.request.cs_map}</strong> Serverda Bulunmad���ndan A��lam�yor ! | Y�nleniyor
								</div>
							</div>				
						{else}
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Harita De�i�tirme ��leminiz Ba�ar� �le Ger�ekle�tir. A��lan Harita <strong>{$smarty.request.cs_map}</strong> | Y�nleniyor
							</div>
						</div>
						{/if}
						<meta http-equiv="refresh" content="3;URL=index.php">
					{/if}
				{/if}

				{if isset($islem) && $islem eq 'createpw'}
					{if isset($smarty.post.sv_password)}
							<div class="notification success png_bg">
							<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								�ifre De�i�tirme ��lemi Tamam . sv_password :  <strong>{$smarty.post.sv_password}</strong> | Y�nleniyor
							</div>
						</div>
						<meta http-equiv="refresh" content="3;URL=index.php">
					{/if}
				{/if}
				
				{if isset($smarty.get.op) && $smarty.get.op eq 'removepw'}
					<div class="notification success png_bg">
							<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								�ifre Ba�ar� �le Kald�r�ld�. | Y�nleniyor
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				{/if}
				
				{if isset($islem) && $islem eq 'kick'}
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Kullan�c� : <strong>{$uname}</strong> Kicklendi | Y�nleniyor.
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				{/if}
				
				{if isset($islem) && $islem eq 'ban'}
						<div class="notification success png_bg">
							<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div align="center">
								Kullan�c� : <strong>{$uname} - {$ip}</strong> 999 Dakika Ban | Y�nleniyor.
							</div>
						</div>
					<meta http-equiv="refresh" content="3;URL=index.php">
				{/if}
				
		<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$info.ip}</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>SERVER DURUMU</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server Ad� : </strong></td>
			<td>{$info.name}</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Oynanan Harita : </strong></td>
			<td><strong>{$info.map}</strong></td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Harita Kalan S�re : </strong></td>
			<td>{$info.kalan_sure}</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Harita S�resi :</strong></td>
			<td>{$info.timelimit}</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Round S�resi : </strong></td>
			<td>{$info.round_suresi}</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server Uptime : </strong></td>
			<td>{$info.uptime} Dakikada | {$info.oyuncu} Player</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Sxei Durumu : </strong></td>
			<td>{if $info.sxei eq 1}
				<font color="green"><b>A��k</b></a>
				{elseif $info.sxei eq 0}
				<font color="orange"><b>Opsiyonel</b></a>	
				{else}
				<font color="red"><b>Kapal�</b></a>	
			{/if}</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Oyuncular : </strong></td>
			<td> {$info.activeplayers} / {$info.maxplayers} </td>
		  </tr>
		</table>

		<table id="sv_password" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
		  <tr>
			<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">&nbsp;</span></td>
		  </tr>
		  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="2" align="center"><strong>Server �ifresi</strong> (sv_password)</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
			<td><strong>Server �ifresi : </strong></td>
			<td>{if $info.swpw eq 'yok'}
				Serverda �ifre Yok !
				{else}
				<strong>{$info.swpw}</strong> <a href="?p=main&op=removepw" class="linkz">�ifreyi Kald�r !</a>
			{/if}
			</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('svpass').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('svpass').className='ynsubmit2'">
			<td><strong>�ifre Olu�tur : </strong></td>
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
			<td colspan="2" align="center"><strong>Harita Ayarlar�</strong> (maps)</td>
		  </tr>
		  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('cs_map').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('cs_map').className='ynsubmit2'">
			<td width="215"><strong>Harita A� : </strong></td>
			<td align="right">
				<form action="?op=changemap" method="post">
				<input type="text" name="cs_map">
				<input type="submit" id="cs_map" value="Uygula!" class="ynsubmit3" onmouseout="this.className='ynsubmit3'" onmouseover="this.className='ynsubmit2'">
				</form>
			</td>
		  </tr>
		  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('mapupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('mapupload').className='ynsubmit2'">
			<td><strong>Harite Y�kle : </strong></td>
			<td align="right">
				Harita Y�klemek ��in <input type="button" id="mapupload" name="mapupload" class="ynsubmit" onclick="window.location.href='?p=uploadmap'" value="T�klay�n">
			</td>
		  </tr>
			<tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('maplist').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('maplist').className='ynsubmit2'">
			<td><strong>Harita Listesi : </strong></td>
			<td align="right">
				Harita Listesini G�rmek ��in <input type="button" id="maplist" name="maplist" class="ynsubmit3" onclick="document.location.href='index.php?p=installedmaps'" value="T�klay�n">
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
			{assign var="say" value="0"}
			{foreach from=$players item=pl}
			{if $say % 2 eq 0}
				{assign var="class" value="bgturuncu"}
			{else}
				{assign var="class" value="bgacikmavi"}
			{/if}
			<tr class="{$class}" onmouseover="this.className='bgonmouseover'" onmouseout="this.className='{$class}'">
			<td>{$pl.name}{foreach from=$admins item=admin}{if in_array($pl.name|lower, $admin|lower)} <img src="{$config.img_dir}/star031.png" title="Bu Oyuncu Admin" /> {/if}{/foreach}</td>
			<td align="center"><a href="?op=kick&player={$pl.id}&uname={$pl.name|base64_encode}" onclick="return confirm('Kullan�c�y� Ger�ekten Kicklemek �stiyor musun ?')"><img border="0" src="{$config.img_dir}/kick.png" /></a> <a onclick="return confirm('({$pl.adress}) Kullan�c�y� Ger�ekten Banlamak �stiyor musun ?')" href="?op=ban&ip={$pl.adress|base64_encode}&uname={$pl.name|base64_encode}"><img border="0" src="{$config.img_dir}/ban.png" /></a> <a href="?p=amxxaddadmin&plname={$pl.name|base64_encode}"><img border="0" src="{$config.img_dir}/adminekle.png" /> </td>
			<td align="center"><b>[{$pl.frag}]</b></td>
			<td align="center">{$pl.ping}</td>
			<td align="right">{$pl.adress}</td>
			</tr>
			<!-- {$say++} -->
			{/foreach}
		</table>
{else}
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					<strong>Server�n�z Kapal� G�r�n�yor Ya Da Rcon �ifreniz Hatal� Server Y�neticinize Ba�vurun . Bu Durumu Hemen Bildirmek ��in T�klay�n <a href="index.php?p=swoff">Buraya</a> T�klayarak Sayfay� Yenileyin<br />
				</strong>
					</div>
			</div>
					
{/if}
<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}