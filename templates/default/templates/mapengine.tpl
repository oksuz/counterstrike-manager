{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		


		{if isset($smarty.post.srv_mapengine)}
			<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						Harita Motoru Deðiþtirildi. <strong> Lütfen Bekleyiniz.</strong>
					</div>
				</div>
			<meta http-equiv="refresh" content="3;URL=index.php?p=mapengine">
	
{else}
<form action="index.php?p=mapengine" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Map Motoru (maps.ini)</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    
    <td colspan="2"><textarea cols="40" rows="20" name="txtmapengine">{$content}</textarea></td>
  </tr>

  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2"><span style="font-size:10px"><strong>* Not : </strong> Þu Anda Oynanan Haritadan Sonra Oylanacak Harita Listesini Düzenliyorsunuz </span><br />
	<span style="font-size:10px"><strong>* Önemli : </strong> Bu Ýþlemden Sonra Sayfa Yenilenene Kadar Bekleyin  . </span>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srv_mapengine').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srv_mapengine').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srv_mapengine" name="srv_mapengine" Value="Uygula!" /></td>
  </tr>
  
</table>
</form>
	{/if}



<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}
