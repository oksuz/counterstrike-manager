function kontrol(_id)
{
	var item = document.getElementById(_id);
	if(item.value == '')
	{
		alert('L�TFEN B�R DE�ER G�R�N�Z');
		item.focus();
		return false;
	}
	
return true;
}

