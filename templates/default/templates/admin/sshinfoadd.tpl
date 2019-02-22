{include file=admin/header.tpl}
{include file=admin/menu.tpl}

		<div id="main-content" class="content"> <form action="" method="post" />
		
		{if isset($blankfield)}
				<div class="notification error png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>Boþ Alan Algýlandý</strong>
					</div>
				</div>
			{/if}
		{if isset($sample)}
				<div class="notification error png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>SSH Takma Adýný Deðiþtirerek Tekrar Deneyin</strong>
					</div>
				</div>
		{/if}
		{if isset($inserted)}
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
							<strong>SSH Bilgisi Eklendi</strong>
					</div>
				</div>
		{/if}
		
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
				<tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><strong>Ssh Bilgisi Ekle </strong></td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Username : </strong></td>
					<td><input type="text" name="sshusername"  />  </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Password : </strong></td>
					<td><input type="text" name="sshpass"  /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH IP : </strong></td>
					<td><input type="text" name="sship"  /> </td>
				  </tr>
				   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Port : </strong></td>
					<td><input type="text" name="sshport"  /> </td>
				  </tr>
				  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
					<td><strong>SSH Takma Adý : </strong></td>
					<td><input type="text" name="sshgrup"  /> </td>
				  </tr>
				  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
					<td colspan="2" align="center"><input type="submit" name="sshadd" value="Ekle" /> </td>
				 </tr>
				</table>
				
<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=admin/footer.tpl}