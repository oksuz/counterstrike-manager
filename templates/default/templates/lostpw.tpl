{include file=header.tpl}

		
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<form action="index.php?p=login&action=lostpw" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">

  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Oyunkurucusu.com Þifremi Unuttum</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
   
   <td><strong>E-Mail Adresi : </strong></td>
   <td><input type="text" name="email" style="width:300px"></td>
   
  </tr>
  
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('picupload').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('picupload').className='ynsubmit2'">
   <td valign="top"><strong>Güvenlik Kodu : </strong></td>
   <td><img src="/guvenlik_kodu.php" alt="gkodu" title="Guvenlik Kodu"><br /><input type="text" name="gkodu" style="width:101px"></td>
  </tr>
 
  
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz';document.getElementById('subm').className='ynsubmit3'" onmouseover="this.className='bgonmouseover';document.getElementById('subm').className='ynsubmit2'">
	<td colspan="2" align="center"><input type="submit" name="submit" id="subm" value="Gönder" class="ynsubmit3" /></td>
  </tr>
  
    <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td align="center" colspan="2"><strong><a href="/">Panele Giriþ</a></strong></td>
  </tr>
  
  {if isset($error)}
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
		<td align="center" colspan="2">{$error}</td>
   </tr>
  {/if}
</table>
</form>

<br />
<br />

		<div class="clear"></div>


