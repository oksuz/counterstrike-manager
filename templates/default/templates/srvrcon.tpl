{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

		{if isset($smarty.post.rconpass)}
			{if isset($rakam)}
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div align="center">
					<strong>Server Ad� Rakam ��eremez !!!</strong> Y�nleniyor ... 
					<meta http-equiv="refresh" content="3;URL=index.php?p=srvrcon">
				</div>
			</div>	
			{else}
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Server Ad� ve �ifreniz De�i�tirildi. <strong> L�tfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=srvrcon">
			{/if}
			
{else}
<form action="index.php?p=srvrcon" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Server Ad� ve Rcon �ifresi</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Server Ad� : </strong></td>
    <td><input type="text" name="servername" onblur="kontrol('servername')" id="servername" value="{$info.hostname}" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Rcon �ifresi : </strong></td>
    <td><input type="text" id="rconpass" onblur="kontrol('rconpass')" name="rconpass" style="width:300px" value="{$info.rconpass}"></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* �nemli : </strong> Server Ad�nda T�rk�e Karakter ve Reklam ��eren Kelimeler Kullanamazs�n�z. <br />  &nbsp;&nbsp;&nbsp; Bu Tip Bir Davran��ta Server�n�z �adesi Olmaks�z�n Kapat�l�r. </span><br />
	<span style="font-size:10px"><strong>* �nemli : </strong> Bu ��lemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srvrcon').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srvrcon').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srvrcon" name="srv_rcon_submit" Value="Uygula !" /></td>
  </tr>
  
</table>
</form>
<br />
<br />
<form action="index.php?p=srvrcon" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Panel Kullan�c� Ad� ve �ifresi</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Kullan�c� Ad� : </strong></td>
    <td><input type="text" name="pusername" disabled="disabled" id="pusername" value="{$uinfo.username}" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Panel �ifresi : </strong></td>
    <td><input type="text" id="ppassword" name="ppassword" style="width:300px" value="{$uinfo.password}"></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* �nemli : </strong> Bu ��lemden Sonra Panelden ��k�� Yapacaks�n�z. Yeni �ifrenizi Kullanarak Tekrar Giri� Yap�n</span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('changeppass').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('changeppass').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="changeppass" name="changeppass" Value="Uygula !" /></td>
  </tr>
  
</table>
</form>


	{/if}



<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}