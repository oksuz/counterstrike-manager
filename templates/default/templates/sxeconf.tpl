{include file=header.tpl}
{include file=menu.tpl}
		
<div id="main-content">		


<form action="" method="post">
<table id="server_durumu" width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" colspan="2" style="border:none" class="bgbeyaz"><span class="serverip">Server Ip : {$smarty.session.ip}:{$smarty.session.port}</span></td>
  </tr>
  <tr class="bgmavi" onmouseout="this.className='bgmavi'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><strong>sXei Ayarlarý</strong></td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>sXei Durumu : </strong></td>
    <td align="center">
		{if $sxestatus == '-1'}
			<span style="color:red">sXe Kapalý</span>
		{elseif $sxestatus == '0'}
			<span style="color:orange">sXe Opsiyonel</span>
		{elseif $sxestatus == '1'}
			<span style="color:green">sXe Gerekli</span>
		{/if}
	</td>
  </tr>
  <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Durumu Deðiþtir : </strong></td>
    <td>
	<input type="radio" name="sxe[status]" value="1" {if $sxestatus == '1'} checked {/if}> Açýk
	<input type="radio" name="sxe[status]" value="0" {if $sxestatus == '0'} checked {/if}> Opsiyonel
	<input type="radio" name="sxe[status]" value="-1" {if $sxestatus == '-1'} checked {/if}> Kapalý
	</td>
  </tr>
  <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Sxe 16 BBP</strong></td>
    <td>
	<input type="radio" name="sxe[bbp]" value="1" {if $sxe16bbp == '1'} checked {/if}> Açýk
	<input type="radio" name="sxe[bbp]" value="0" {if $sxe16bbp == '0'} checked {/if}> Kapalý
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Sxe Anti Speed : </strong></td>
    <td>
	<input type="radio" name="sxe[antispeed]" value="1" {if $sxeantispeed == '1'} checked {/if}> Açýk
	<input type="radio" name="sxe[antispeed]" value="0" {if $sxeantispeed == '0'} checked {/if}> Kapalý
	</td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td><strong>Sxe AntiWall</strong></td>
    <td>
	<input type="radio" name="sxe[antiwall]" value="1" {if $sxeantiwall == '1'} checked {/if}> Açýk
	<input type="radio" name="sxe[antiwall]" value="0" {if $sxeantiwall == '0'} checked {/if}> Kapalý
	</td>
  </tr>
   <tr class="bgacikmavi" onmouseout="this.className='bgacikmavi';document.getElementById('sxesubmit').className='ynsubmit'" onmouseover="this.className='bgonmouseover';document.getElementById('sxesubmit').className='ynsubmit2'">
    <td colspan="2" align="center"><input type="submit" class="ynsubmit" id="sxesubmit" name="sxesubmit" Value="Uygula !" /></td>
  </tr>
   <tr class="bgbeyaz" onmouseout="this.className='bgbeyaz'" onmouseover="this.className='bgonmouseover'">
    <td colspan="2" align="center"><span style="font-size:10px">
	<strong>AntiWall : </strong> WallHack Engellemk Ýçin Kullanýlýr Bazý Camlý Maplerde Kapatýlmasý Önerilir<br />
	<strong>16 BBP : </strong> 16Bit Kullanan Oyuncularýn Nickinin Basina [16bbp] Eklenir<br />
	<strong>AntiSpeed : </strong> Speed Hack Engellemek Ýçin Kullanýlýr<br />
	<strong>Sxe Client Versiyon : </strong> {$sxecli}  ||  <strong>Sxe Server Versiyon : </strong> {$sxeserv} <br />
	<strong>* NOT : </strong> Bu Deðiþiklikler Serverýnýzda Anýnda Uygulanacaktýr <br />
	</span></td>
  </tr>
  
</table>
</form>


<br />
<br />

		</div> 
		<div class="clear"></div>

{include file=footer.tpl}