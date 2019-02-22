<?php
	$site = getenv('HTTP_HOST');
	if(substr($site,0,4) == 'www.')
	{
		$site = str_replace('www.','',$site);
	}
	$hash = wordwrap(strtoupper(md5(base64_encode(md5(base64_encode(md5($site)))))),4,'-',TRUE);
	if($hash != $content)
	{
		@mail('root@oyunkurucusu.com','lisanssiz kullanima tesebbus',$host_neym);
		die('Lisanssiz Kullanim Tespit edildi <h1>OYUNKURUCUSU.COM</h1>');
	}
?>