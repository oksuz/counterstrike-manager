{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		


		{if isset($smarty.post.srv_uploadmap_submit) || isset($smarty.post.sv_mappackage)}
			{if $type == 'mapupload'}
				{if $mapupload == 'OK'}
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						 Dosya Yüklendi | Yönleniyor
					</div>
				</div>
				{else}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>  | Yönleniyor
						</div>
					</div>
				{/if}
			{else}
				{if $packupload == 'filext'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Paket Yüklenemedi !!! Uzanti Zip Deðil</strong>  | Yönleniyor
						</div>
					</div>
				{elseif $packupload == 'fail'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Paket Yüklenemedi !!!</strong>  | Yönleniyor
						</div>
					</div>
				
				{else}
					<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						 Paket Yükleme Ýþlemi Baþarýlý | Yönleniyor <br />
						 {$response}
					</div>
				</div>
				{/if}
			{/if}
		<meta http-equiv="refresh" content="3;URL=index.php?p=uploadmap">
	
{else}
<form action="index.php?p=uploadmap" method="post" enctype="multipart/form-data">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Map Yükle</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Dosya Seçin : </strong></td>
    <td><input type="file" name="mapfile" onblur="kontrol('mapfile')" id="mapfile" style="width:300px"></td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Yüklenecek Dizin : </strong></td>
    <td>
	<select name="folder">
		<option value="/">Anadizin
		<option value="maps">Maps
		<option value="sound">Sounds
		<option value="models">Models
		<option value="gfx">Gfx
		<option value="overviews">Overviews
	</select>
	</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Ek Dizin : </strong></td>
    <td><input type="text" name="ekdizin" style="width:300px"></td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('srv_uploadmap_submit').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('srv_uploadmap_submit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="srv_uploadmap_submit" name="srv_uploadmap_submit" Value="Yükle !" /></td>
  </tr>
  
</table>
</form>

<form action="?p=uploadmap&package=yes" method="post" enctype="multipart/form-data">
<table id="sv_password" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Ya Da</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">

    <td colspan="2" align="center"><strong>Map Paketi Yükle</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Dosya Seçin (*.zip) : </strong></td>
    <td>		
	<input type="file" name="map_package">
	</td>
  </tr>

  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('sv_mappackage').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('sv_mappackage').className='ynsubmit2'">
 
    <td colspan="2" align="center">
	
	<input type="submit" name="sv_mappackage" id="sv_mappackage" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">

	</td>
	
	
  </tr>
  
   
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2">
	<span style="font-size:10px">
	<strong>* Önemli : </strong> .wad Dosyalarý Genellikle Anadizine Atýlýr<br />
	<strong>* Önemli : </strong> .bsp Dosyalarý Genellikle Maps Dizinine Atýlýr<br />
	<strong>* Önemli : </strong> .vaw Dosyalarý Genellikle Sound Dizinine Atýlýr<br />
	<strong>* Önemli : </strong> Ýndirdiðiniz Mapin Dosyalarý Genel Olarak Klasör Yapýsý Halindedir Ayný Þekilde Uygun Dizinlere Atmanýz Gerekmektedir<br />
	<strong>* Ek Dizin Nedir ? : </strong> Ek dizin indirmiþ olduðunuz mapin içinde ornegin sound/<strong>klasor</strong>/ses.vaw seklidekdir yüklenecek dizin bölümünden soundu ek klasör olarakda <strong>klasor</strong> yazmalýsýnýz	<br />
	<strong>* Map Paketi Nasýl Yüklenir ? : </strong> 	<br />
	</span>
	</td>
  </tr>

  
</table>
	</form>


	{/if}



<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}