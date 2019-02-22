{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

	{if isset($info)}
		{if $info eq 'fail'}
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Bazý Alanlar Boþ Býrakýldý</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		{elseif $info eq 'bigger'}
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Yazmýþ Olduðunuz Problem 500 Karakterden Fazla</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		{else}
			<div class="notification success png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Destek Talebiniz Elimize Ulaþtý. En Kýsa Sürede Size Geri Dönüþ Yapýlacaktýr</strong> Yönleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		{/if}

{else}
<form action="index.php?p=ticket" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
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
			<strong>Son 10 {if $smarty.get.status eq 'completed'}Tamamlanmýþ{/if} Talebiniz</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Talebi Yapan</strong></td>
	<td align="center"><strong>Konu</strong></td>
    <td align="center"><strong>Aciliyet</strong></td>
    <td align="center"><strong>Son Durum</strong></td>
    <td align="center"><strong>Detay</strong></td>
  
  </tr>
	{if $request eq 'fail'}
		<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
			<td colspan="5" align="center"><strong>Bekleyen Talebiniz Yok. Tamamlanmýþ Talepler Ýçin  <a href="?p=ticket&status=completed">Týklayýn</a></strong></td>
		</tr>
	{else}
		{assign var = 'bgcolor' value = 'bgacikmavi'}
		{foreach from=$request item=req}
				{if $bgcolor == 'bgacikmavi'}
				<tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
					<td align="center">{$req.requestby}</td>
					<td align="center">{$req.title}</td>
					<td align="center">{$req.critical}</td>
					<td align="center">
						{if $req.status eq '1'}
							Sorumlu Bekleniyor
						{elseif $req.status eq '2'}
							Sorumlu Atandý
						{elseif $req.status eq '3'}
							Sorumlu Problem Ýle Ýlgileniyor
						{else}
							Problem Çözüldü
						{/if}
					</td>
					<td align="center"><strong><a href="?p=ticket&action=view&ticketid={$req.id}">Detay</a></strong></td>
				</tr>
				{assign var = 'bgcolor' value = 'bgbeyaz'}
				{else}
				{assign var = 'bgcolor' value = 'bgbeyaz'}
					<tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
					<td align="center">{$req.requestby}</td>
					<td align="center">{$req.title}</td>
					<td align="center">{$req.critical}</td>
					<td align="center">
						{if $req.status eq '1'}
							Sorumlu Bekleniyor
						{elseif $req.status eq '2'}
							Sorumlu Atandý
						{elseif $req.status eq '3'}
							Sorumlu Problem Ýle Ýlgileniyor
						{else}
							Problem Çözüldü
						{/if}
					</td>
					<td align="center"><strong><a href="?p=ticket&action=view&ticketid={$req.id}">Detay</a></strong></td>
				</tr>
				{assign var = 'bgcolor' value = 'bgacikmavi'}
				{/if}
				
		{/foreach}
	{/if}
  
  {if $smarty.get.status eq 'completed'}
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
   <td colspan="5" align="center"><a href="?p=ticket"><strong>Destek Anasayfasýna Dön</strong></a></td>
   </tr>
  {/if}
  
</table>
	{/if}
<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}