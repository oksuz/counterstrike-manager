{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

<form action="index.php?p=motd" method="post">
<table id="server_durumu" width="640" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="6" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
    <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="6" align="center">
			<strong>Adminleri Düzenle</strong>
		</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td align="center"><strong>Admin</strong></td>
    <td align="center"><strong>Þifre</strong></td>
    <td align="center"><strong>Yetki</strong></td>
    <td align="center"><strong>Açýklama</strong></td>
    <td align="center"><strong>Düzenle</strong></td>
    <td align="center"><strong>Sil</strong></td>
  </tr>
  
  {if $admin eq 'fail'}

	  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
		<td colspan="6" align="center"><strong>Serverda Admin Tanýmlý Deðil</strong></td>
	  </tr>
  
  {else}
	  {assign var = 'bgcolor' value = 'bgacikmavi'}
	  {foreach from=$admin item=list}
	  {if $bgcolor == 'bgacikmavi'}
	  <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td>{$list.user}</td>
		<td>{$list.pass}</td>
		<td>{$list.access}</td>
		<td>{$list.comment}</td>
		<td align="center"><a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id={$list.id}"><img border="0" src="{$config.img_dir}/icons/admin_edit.png"></a></td>
		<td align="center"><a onclick="return confirm('Admin {$list.user|addslashes} silinecek Onaylýyor Musunuz ?')"  href="index.php?p=amxxeditadmin&action=amxxeditadmin_delete&id={$list.id}"><img border="0" src="{$config.img_dir}/icons/admin_delete.png"></a></td>
	  </tr>
		{assign var = 'bgcolor' value = 'bgbeyaz'}
	  {else}
	   <tr class="{$bgcolor}" onmouseout="this.className='{$bgcolor}'" onmouseover="this.className='bgonmouseover'">
		<td>{$list.user}</td>
		<td>{$list.pass}</td>
		<td>{$list.access}</td>
		<td>{$list.comment}</td>
		<td align="center"><a href="index.php?p=amxxeditadmin&action=amxxeditadmin_edit&id={$list.id}"><img border="0" src="{$config.img_dir}/icons/admin_edit.png"></a></td>
		<td align="center"><a onclick="return confirm('Admin {$list.user|addslashes} silinecek Onaylýyor Musunuz ?')" href="index.php?p=amxxeditadmin&action=amxxeditadmin_delete&id={$list.id}"><img border="0" src="{$config.img_dir}/icons/admin_delete.png"></a></td>
	  </tr>
		{assign var = 'bgcolor' value = 'bgacikmavi'}
	  {/if}
	  {/foreach}
 {/if}
</table>
</form>

<br />
<br />

		</div> 
		<div class="clear"></div>