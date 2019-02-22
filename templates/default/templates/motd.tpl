{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		


		{if isset($smarty.post.srv_motd_submit)}
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Server Giriþ Yazisi Degiþtirildi. <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=motd">
	
{else}
<form action="index.php?p=motd" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Server Giriþ Yazýsý (motd.txt)</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    
    <td colspan="2"><textarea cols="40" rows="20" name="txtmotd">{$content}</textarea></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('picupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('picupload').className='ynsubmit2'">
    <td><strong>Resim Yüklemek Ýçin : </strong></td>
    <td><input type="button" id="picupload" name="picupload" class="ynsubmit" onclick="javascript:window.open('?p=motd&action=uploadpic','mywin','left=50,top=50,width=450,height=300,toolbar=0,resizable=0')" value="Týklayýn">
</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Not : </strong> Þu Anda Serveriniza Ýlk Giriþte Karþýnýza Gelecek Olan Ekraný Düzenliyorsunuz. </span><br />
	<span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srv_motd_submit').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srv_motd_submit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srv_motd_submit" name="srv_motd_submit" Value="Uygula!" /><div id="info"></div></td>
  </tr>
  
</table>
</form>
	{/if}



<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}
