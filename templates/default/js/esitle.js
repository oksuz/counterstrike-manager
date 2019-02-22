$(document).ready(function(){
	var sbarwr = $('#sidebar-wrapper').height();
	var sbar = $('#sidebar').height();
	var main = $('#main-content').height();
	var odeme = $('#odeme').height();
	
	
	if(sbar < main)
	{ 
		$('#sidebar-wrapper').css('height', main + odeme );
		$('#sidebar').css('height', main + odeme );
		$('#main-content').css('height' , (main-10))
	}
	else
	{
		$('#main-content').css('height', (sbar-10) - odeme );
	}
	
	
});

$(function(){
	$(' :submit').click(function(){
		$(this).css('visibility','hidden');
		$('#info').html('<img src="http://panel.oyunkurucusu.com/templates/default/img/wait.gif" />')
	});
});	