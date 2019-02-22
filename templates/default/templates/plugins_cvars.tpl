{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

<form action="index.php?p=plugins&action=cvars&pluginid={$smarty.get.pluginid}" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
   <tr>
    <td align="center" colspan="2" class="bgmavi">Plugin <strong>{$cvars.0.pluginname}</strong> Ayarlarý</td>
  </tr>
	{assign var="say" value="0"}
	{foreach from=$cvars item=cvar key=k}
		{if $say % 2 eq 0}
			{assign var="class" value="bgbeyaz"}
		{else}
			{assign var="class" value="bgacikmavi"}
		{/if}
		<tr class="{$class}" onmouseover="this.className='bgonmouseover'" onmouseout="this.className='{$class}'">
			<td><b>{$cvar.name}</b><br /><span class="placiklama">{$cvar.description}</span></td>
			<td>
			<input type="hidden" name="c[{$say}]">
			<input type="hidden" name="c[{$say}][cvarname]" value="{$cvar.cvar}">
			<input type="text" name="c[{$say}][value]" value="{$cvar.value}">
			<input type="hidden" name="c[{$say}][hidden]" value="{$cvar.value}">
			<input type="hidden" name="c[{$say}][id]" value="{$cvar.id}">
			</td>
		</tr>
	<!-- {$say++} -->
	{/foreach}
	<input type="hidden" name="cvarcfg" value="{$cvar.cvarcfg}">
	   <tr>
    <td align="center" colspan="2" style="border:none" class="bgmavi"><input type="submit" name="csubmit" value="gonder"></td>
  </tr>
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>
		{include file=footer.tpl}