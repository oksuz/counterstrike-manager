{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		

<form action="index.php?p=ticket" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>Destek Talebi Detayý</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Talebi Yapan : </strong></td>
    <td style="width:350px">{$detail.requestby}</td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Aciliyet : </strong></td>
    <td>{$detail.critical}</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Konu : </strong></td>
    <td>{$detail.title}</td>
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td valign="top"><strong>Sorun : </strong></td>
    <td><textarea readonly="readonly" name="problem" rows="5" cols="7">{$detail.description}</textarea></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Son Durum : </strong></td>
    <td>{if $detail.status eq '1'}Sorumlu Bekleniyor{elseif $detail.status eq '2'}{$person.name} {$person.surname} Sorumlu Olarak Atandý
	{elseif $detail.status eq '3'}{$person.name} {$person.surname} Problem Ýle ilgilenmeye baþladý
	{else}Problem / Ýstek Çözüme Ulaþtý{/if}</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td valign="top"><strong>Sorumlu Notu : </strong></td>
    <td>{$detail.solution}</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong><a href="?p=ticket">Geri Dön</a></strong></td>
  </tr>
</table>
</form>

<br />
<br />


		</div> 
		<div class="clear"></div>

{include file=footer.tpl}