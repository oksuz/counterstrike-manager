<form action="" method="post" enctype="multipart/form-data"> 
<table align="center">
	<tr>
		<td align="center">Resim Yukle</td>
	</tr>
	<tr>
		<td align="center"><input type="file" name="pic"></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" name="picupload_submit" value="Y�kle" id="picupload_submit" /></td>
	</tr>
	
	{if isset($imgpath)}
	<tr>
		<td align="center">
		<textarea cols="30" rows="15">
		{if $imgpath == '1'}
			Resim Y�klerken Bir Hata Olu�tu. Tekrar Deneyin.
		{elseif $imgpath == '0'}
			�zin Verilen Uzantilar Sadece jpeg,jpg,gif,png'dir. 
		{elseif $imgpath == '-1'}
			�zin Verilen Resim Boyutu En Fazl 1 MB'dir;
		{else}
		<!--- Bu Kodlari Kopyalayin ve Sag Taraftaki Giris Yazisi Alanina Yapistirin --->
			<img src="http://panel.oyunkurucusu.com/{$imgpath}" alt="OyunKurucusu.Com Giris Resmi" />
		{/if}
		</textarea>
		</td>
	</tr>
	{/if}

</table>
</form>
