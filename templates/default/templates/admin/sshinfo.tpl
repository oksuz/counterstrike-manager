{include file=admin/header.tpl}
{include file=admin/menu.tpl}

		<div id="main-content" class="content">
		
		{if  isset($seted)}
			{if $seted eq 'no'}
			   <div class="notification success png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Güncelleme Ýþlemi Baþarýlý Oldu</strong>
					</div>
				</div>
			{/if}
			{if $seted eq 'y'}
			   <div class="notification error png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Boþ Alanlar Algýlandý</strong>
					</div>
				</div>
			{/if}
		{/if}
		
		<form action="" method="get" />
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Ssh Bilgileri / Ekle Düzenle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>SSH Takma Adý : </strong></td>
				<td>
				<input type="hidden" name="p" value="admin_sshinfo" />
				<select name="sshid" onchange="document.forms[0].submit()">
				<option value="" seleceted> ------------ </option>
				{foreach from=$ssh item=ss}
				<option value="{$ss.id}">{$ss.grup}</option>
				{/foreach}
				</select> 
				<a href="index.php?p=admin_sshinfo&action=sshinfoadd">Ekle</a>
				</td>
			  </tr>
			  {if isset($sshedit) && !isset($smarty.post.sshsubmit)}
				  </form>
				  <form action="" method="post" />
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><strong>Ssh Bilgisi Düzenleniyor ({$sshinfo.grup}) </strong></td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Username : </strong></td>
					<td><input type="text" name="sshusername" value="{$sshinfo.sshuser}" />  </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Password : </strong></td>
					<td><input type="password" name="sshpass" value="{$sshinfo.sshpass}" /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH IP : </strong></td>
					<td><input type="text" name="sship" value="{$sshinfo.ip}" /> </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Port : </strong></td>
					<td><input type="text" name="sshport" value="{$sshinfo.port}" /> </td>
				  </tr>
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				  <input type="hidden" name="sshid" value="{$sshinfo.id}" />
					<td colspan="2" align="center"><input type="submit" name="sshsubmit" value="Güncelle" /> </td>
				  </tr>
			  {/if}
			  
			</table>
			
		</form>





<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=admin/footer.tpl}