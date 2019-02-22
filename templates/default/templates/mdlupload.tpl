{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		
{if $smarty.get.type eq 'pelerin'}
	{if isset($smarty.post.modelupload)}
			{if isset($mdlerror)}
				{if $mdlerror eq '1'}
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				{elseif $mdlerror eq '2'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				{elseif $mdlerror eq '3'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				{/if}
				{else}
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			{/if}
		{/if}
			<form action="index.php?p=mdlupload&type=pelerin" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Pelerin Modeli Yükle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
				</span>
				</td>
			  </tr>
			</table>
			</form>
		{elseif $smarty.get.type eq 'jailmodel'}
			
		{if isset($smarty.post.modelupload)}
			{if isset($mdlerror)}
				{if $mdlerror eq '1'}
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				{elseif $mdlerror eq '2'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				{elseif $mdlerror eq '3'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				{/if}
				{else}
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			{/if}
		{/if}
			
		<form action="index.php?p=mdlupload&type=jailmodel" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Jail CT Modeli</strong></td>
			  </tr>
			  
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile[ct]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[ct]" value="dontuploadct"> </td>
				
			 </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Jail Terror Modeli</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile[t]" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"><br /><input type="hidden" name="dontupload[t]" value="dontuploadt"> </td>
				<input type="hidden" name="dontupload[]" value="noerror" />
			 </tr>
			  
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" onclick="alert('3. Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('2 . Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('1. Yükleme Ýþlemi Bitmeden Baþka Bir Yere Týklamayýn');alert('Yükleme Ýþlemini Baþlatmak Ýçin Tamama Týklayýn')" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Tüm Alanlar Zorunludur (CT ve T modeli seçilmelidir) <br />
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
				</span>
				</td>
			  </tr>

			</table>
			</form>
		{elseif $smarty.get.type eq 'head'}
			{if isset($smarty.post.modelupload)}
				{if isset($mdlerror)}
					{if $mdlerror eq '1'}
				<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Dosya Yüklenemedi !!!</strong>
						</div>
					</div>
				{elseif $mdlerror eq '2'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Yüklemeye Çalýþtýðýnýz Dosya .mdl Uzantýlý Deðil ... </strong>
						</div>
					</div>
				{elseif $mdlerror eq '3'}
					<div class="notification error png_bg">
						<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
						<div align="center">
							<strong>Bir Hata Meydana Geldi (Dosya Seçilmemiþ Olabilir)</strong>
						</div>
					</div>
				{/if}
				{else}
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="{$config.img_dir}/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div align="center">
						<strong>Modeliniz Baþarýyla Yüklendi</strong>
					</div>
				</div>
			{/if}
		{/if}
			<form action="index.php?p=mdlupload&type=head" method="post" enctype="multipart/form-data">
			<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
			  <tr>
				<td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
			  </tr>
			  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2" align="center"><strong>Þapka Modeli Yükle</strong></td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td><strong>Dosya Seçin : </strong></td>
				<td><input type="file" name="mdlfile" onblur="kontrol('mdlfile')" id="mdlfile" style="width:300px"></td>
			  </tr>
				<tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('modelupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('modelupload').className='ynsubmit2'">
				<td colspan="2" align="center">
				<input type="submit" name="modelupload" id="modelupload" value="Yükle!" class="ynsubmit" onmouseout="this.className='ynsubmit'" onmouseover="this.className='ynsubmit2'">
				</td>
			  </tr>
			  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
				<td colspan="2">
				<span style="font-size:10px">
				<strong>* Önemli : </strong> Yüklemek istenilen model <strong>.mdl</strong> Uzantýlý Olmalýdýr. <br />
				<strong>* Önemli : </strong> Yükle butonuna bastýktan sonra <strong>Yüklendi ya da Hata</strong> mesajý çýkana kadar bekleyin<br />
				<strong>* Önemli : </strong> Modeliniz yüklendikten sonra geçerli olmasý için <strong>mapi yenilemeniz</strong> gerekmektedir . <br />
				<strong>* Önemli : </strong> Yüklediðiniz modellerde farklý bir <strong>Ip / Site reklamý tespit edilirse , serverýnýz iadesiz geri alýnýr. </strong>
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