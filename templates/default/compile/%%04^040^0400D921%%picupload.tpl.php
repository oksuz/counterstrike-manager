<?php /* Smarty version 2.6.26, created on 2010-09-01 09:53:41
         compiled from picupload.tpl */ ?>
<form action="" method="post" enctype="multipart/form-data"> 
<table align="center">
	<tr>
		<td align="center">Resim Yukle</td>
	</tr>
	<tr>
		<td align="center"><input type="file" name="pic"></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" name="picupload_submit" value="Yükle" id="picupload_submit" /></td>
	</tr>
	
	<?php if (isset ( $this->_tpl_vars['imgpath'] )): ?>
	<tr>
		<td align="center">
		<textarea cols="30" rows="15">
		<?php if ($this->_tpl_vars['imgpath'] == '1'): ?>
			Resim Yüklerken Bir Hata Oluþtu. Tekrar Deneyin.
		<?php elseif ($this->_tpl_vars['imgpath'] == '0'): ?>
			Ýzin Verilen Uzantilar Sadece jpeg,jpg,gif,png'dir. 
		<?php elseif ($this->_tpl_vars['imgpath'] == '-1'): ?>
			Ýzin Verilen Resim Boyutu En Fazl 1 MB'dir;
		<?php else: ?>
		<!--- Bu Kodlari Kopyalayin ve Sag Taraftaki Giris Yazisi Alanina Yapistirin --->
			<img src="http://panel.oyunkurucusu.com/<?php echo $this->_tpl_vars['imgpath']; ?>
" alt="OyunKurucusu.Com Giris Resmi" />
		<?php endif; ?>
		</textarea>
		</td>
	</tr>
	<?php endif; ?>

</table>
</form>