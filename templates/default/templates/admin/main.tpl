{include file=admin/header.tpl}
{include file=admin/menu.tpl}

		
		<div id="main-content" class="content">
		<form action="" method="post" target="_blank" />
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Yönetim Paneli</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Bir Serveri Yönet</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>ServerIP : </strong></td>
				<td><select name="servermanage" onchange="document.forms[0].submit()">
				<option value="" seleceted> ------------ </option>
				{foreach from=$ips item=ip}
				<option value="{$ip.ip}">{$ip.ip}</option>
				{/foreach}
				</select> 
				</td>
			  </tr>
			</table>
		</form>





<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=admin/footer.tpl}