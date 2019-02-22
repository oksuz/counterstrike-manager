function kontrol(_id)
{
	var item = document.getElementById(_id);
	if(item.value == '')
	{
		alert('LÜTFEN BÝR DEÐER GÝRÝNÝZ');
		item.focus();
		return false;
	}
	
return true;
}

