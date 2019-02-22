{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

	{if isset($info)}
		{if $info eq 'fail'}
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Baz� Alanlar Bo� B�rak�ld�</strong> Y�nleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		{elseif $info eq 'bigger'}
			<div class="notification error png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Yazm�� Oldu�unuz Problem 500 Karakterden Fazla</strong> Y�nleniyor...
			</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=ticket">
		{else}
			<div class="notification success png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div align="center">
			<strong>Destek Talebiniz Elimize Ula�t�. En K�sa S�rede Size Geri D�n�� Yap�lacakt�r</strong> Y�nleniyor...
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
    <td colspan="2" align="center"><strong>Yeni Destek Talebi Olu�tur</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>�nem Derecesi : </strong></td>
    <td><select name="critical" id="derece" style="width:300px">
	<option value="D���k" selected="selected">D���k</option>
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
			<strong>Son 10 {if $smarty.get.status eq 'completed'}Tamamlanm��{/if} Talebiniz</strong>
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
			<td colspan="5" align="center"><strong>Bekleyen Talebiniz Yok. Tamamlanm�� Talepler ��in  <a href="?p=ticket&status=completed">T�klay�n</a></strong></td>
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
							Sorumlu Atand�
						{elseif $req.status eq '3'}
							Sorumlu Problem �le �lgileniyor
						{else}
							Problem ��z�ld�
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
							Sorumlu Atand�
						{elseif $req.status eq '3'}
							Sorumlu Problem �le �lgileniyor
						{else}
							Problem ��z�ld�
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
   <td colspan="5" align="center"><a href="?p=ticket"><strong>Destek Anasayfas�na D�n</strong></a></td>
   </tr>
  {/if}
  
</table>
	{/if}
<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}