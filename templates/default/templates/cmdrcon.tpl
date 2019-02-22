{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		




<form action="" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Servera Bir Komut Gönder</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Komut : </strong></td>
    <td><input type="text" name="cmd" id="cmd"  style="width:300px"></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srvrcon').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srvrcon" name="sendcmd" Value="Uygula !" /></td>
	
  {if isset($response) && $response != ''}
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
  		<div class="notification success png_bg">
			<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
				{$response}
				</div>
			</div>

  {/if}
  
</table>
</form>


<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}