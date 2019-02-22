{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

	{if isset($plugindetails) || isset($pluginalready)}
		{if $plugindetails.on eq 'yes'}
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					Eklenti : <strong>{$plugindetails.details.pluginname}</strong> A��ld�. Y�nleniyor...
				</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		{else}
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong>{$plugindetails.details.pluginname}</strong> Kapat�ld�. Y�nleniyor...
		</div>
			</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		{/if}
		
	{if isset($pluginalready)}
		{if $pluginalready eq '1'}
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong>{$plugindetails.details.pluginname}</strong> Zaten A��k. Y�nleniyor...
		</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		{elseif $pluginalready eq '0'}
			<div class="notification error png_bg">
		<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div align="center">
			Eklenti : <strong>{$plugindetails.details.pluginname}</strong> Zaten Kapal�. Y�nleniyor...
		</div>
			<meta http-equiv="refresh" content="3;URL=?p=plugins">
		{/if}
	{/if}

{else}
<table id="server_durumu" width="640" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="3" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
    <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="3" align="center">
			<strong>Eklenti Y�netimi</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Eklenti</strong></td>
    <td align="center"><strong>A� / Kapa</strong></td>
    <td align="center"><strong>Durum</strong></td>
    <!--- <td align="center"><strong>Ayarlar</strong></td> --->
  </tr>
  
  {if $plug eq 'fail'}

	  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="4" align="center"><strong>Server�n�z ��in Hi� Eklenti Tan�ml� De�il</strong></td>
	  </tr>
  
  {else}
	  {assign var = 'bgcolor' value = 'bgacikmavi'}
	  {foreach from=$plug item=list}
	  {if $bgcolor == 'bgacikmavi'}
	  <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td><b>{$list.pluginname}</b><br /><span class="placiklama">{$list.descp}</span></td>
		<td align="center">{if $list.status eq '1'} <a href="?p=plugins&setstatus=0&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/button_pause_red.png"></a> {else if $list.status eq '0'} <a href="?p=plugins&setstatus=1&pluginid={$list.id}"> <img border="0" src="{$config.img_dir}/icons/button_play_green.png"></a> {/if}</td>
		<td align="center">{if $list.status eq '0'} <img border="0" src="{$config.img_dir}/icons/button_pause_red.png"> {else if $list.status eq '1'}  <img border="0" src="{$config.img_dir}/icons/button_play_green.png">  {/if} </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/preferences_system.png"></a></td> --->
	  </tr>
		{assign var = 'bgcolor' value = 'bgbeyaz'}
	  {else}
	   <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td><b>{$list.pluginname}</b><br /><span class="placiklama">{$list.descp}</span></td>
		<td align="center">{if $list.status eq '1'} <a href="?p=plugins&setstatus=0&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/button_pause_red.png"></a> {else if $list.status eq '0'} <a href="?p=plugins&setstatus=1&pluginid={$list.id}"> <img border="0" src="{$config.img_dir}/icons/button_play_green.png"></a> {/if}</td>
		<td align="center">{if $list.status eq '0'} <img border="0" src="{$config.img_dir}/icons/button_pause_red.png"> {else if $list.status eq '1'}  <img border="0" src="{$config.img_dir}/icons/button_play_green.png">  {/if} </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/preferences_system.png"></a></td> --->
	  </tr>
		{assign var = 'bgcolor' value = 'bgacikmavi'}
	  {/if}
	  {/foreach}
 {/if}
		<tr class="bggray">
		<td colspan="3" align="center">
			{if isset($othermodplugins)}
				<b>Oynad���n�z Map'e Uygun Bir Eklenti Yok</b>
			{elseif $xpartyplugins eq 'failed'}
				<b>Oynad���n�z Map'e G�re Bir Eklenti Tan�mlanmam��.</b>
			{elseif $xpartyplugins neq 'failed'}
				<b>Oynad���n�z Mod : {$xpartyplugins} , Buna Uygun Eklentiler A�a��da Listelenmi�tir</b>
			{/if}
		</td>
	  </tr>
	  
	 {assign var = 'bgcolor' value = 'bgacikmavi'}
	  {foreach from=$modplugins item=list}
	  {if $bgcolor == 'bgacikmavi'}
	  <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td><b>{$list.pluginname}</b><br /><span class="placiklama">{$list.descp}</span></td>
		<td align="center">{if $list.status eq '1'} <a href="?p=plugins&setstatus=0&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/button_pause_red.png"></a> {else if $list.status eq '0'} <a href="?p=plugins&setstatus=1&pluginid={$list.id}"> <img border="0" src="{$config.img_dir}/icons/button_play_green.png"></a> {/if}</td>
		<td align="center">{if $list.status eq '0'} <img border="0" src="{$config.img_dir}/icons/button_pause_red.png"> {else if $list.status eq '1'}  <img border="0" src="{$config.img_dir}/icons/button_play_green.png">  {/if} </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/preferences_system.png"></a></td> --->
	  </tr>
		{assign var = 'bgcolor' value = 'bgbeyaz'}
	  {else}
	   <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td><b>{$list.pluginname}</b><br /><span class="placiklama">{$list.descp}</span></td>
		<td align="center">{if $list.status eq '1'} <a href="?p=plugins&setstatus=0&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/button_pause_red.png"></a> {else if $list.status eq '0'} <a href="?p=plugins&setstatus=1&pluginid={$list.id}"> <img border="0" src="{$config.img_dir}/icons/button_play_green.png"></a> {/if}</td>
		<td align="center">{if $list.status eq '0'} <img border="0" src="{$config.img_dir}/icons/button_pause_red.png"> {else if $list.status eq '1'}  <img border="0" src="{$config.img_dir}/icons/button_play_green.png">  {/if} </td>
		<!--- <td align="center"><a href="?p=plugins&action=cvars&pluginid={$list.id}"><img border="0" src="{$config.img_dir}/icons/preferences_system.png"></a></td> --->
	  </tr>
		{assign var = 'bgcolor' value = 'bgacikmavi'}
	  {/if}
	  {/foreach}
	  
</table>
<br />
<br />
<br />
<table id="server_durumu" width="350" border="0" align="center" cellpadding="3" cellspacing="0">
   <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td width="150" align="center"><strong>Durum Simgesi</strong></td>
    <td align="center"><strong>A��klama</strong></td>
  </tr>
 <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><img border="0" valign="center" src="{$config.img_dir}/icons/button_pause_red.png"></td>
    <td align="left">Eklenti Kapal�</td>
  </tr>
	 <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><img border="0" valign="center" src="{$config.img_dir}/icons/button_play_green.png"></td>
    <td align="left">Eklenti A��k</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center" colspan="2"><strong>Not:</strong> Yapm�� Oldu�unuz De�i�iklikler Bir Sonraki Map De�i�iminde Etkin Olacakt�r.</td>
  </tr>
  </table>
{/if}
<br />
<br />

		</div> 
		<div class="clear"></div>
		{include file=footer.tpl}