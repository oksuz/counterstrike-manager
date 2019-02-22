{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

<form action="index.php?p=motd" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
   <tr>
		<td align="center" colspan="2" style="border:none" class="bgbeyaz">
		{if isset($smarty.get.sort)}
			<a href="index.php?p=installedmaps">Karýþýk Sýrala</a>
		{else}
			<a href="index.php?p=installedmaps&sort=byname">Ýsme Göre Sýrala</a>
		{/if}
	</td>
  </tr>
  {assign var = 'bgcolor' value = 'bgmavi'}
  {foreach from=$maplist item=list}
  {if $bgcolor == 'bgmavi'}

  <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
    <td align="center">{$list}</td>
    <td align="center"><a href="index.php?p=main&op=changemap&cs_map={$list}"><b>Aç</b></a></td>
  </tr>
    {assign var = 'bgcolor' value = 'bgbeyaz'}
  {else}
    <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
    <td align="center">{$list}</td>
	 <td align="center"><a href="index.php?p=main&op=changemap&cs_map={$list}"><b>Aç</b></a></td>
  </tr>
    {assign var = 'bgcolor' value = 'bgmavi'}
  {/if}
  {/foreach}
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>