<?php
if(!defined('PAGE')): die('Direct Access Not Allowed !'); endif;
	
	if(isset($_POST['submit']))
	{
		$_POST = array_map('mysql_real_escape_string',$_POST);
		if($_POST['email'] == '')
		{
			$smarty->assign('error','E Mail Adresi Alan� Bo� B�rak�ld�');
		}
		elseif($_SESSION['securitykey'] == '' || $_POST['gkodu'] != $_SESSION['securitykey'])
		{
			$smarty->assign('error','G�venlik Kodu Bo� veya Hatal� Girildi');
		}
		else
		{
			$db->sql("SELECT * FROM users WHERE email = '".$_POST['email']."'"); $db->query();
			if($db->numrows() < 1)
			{
				$smarty->assign('error','Bu E-Posta Adresi Kay�tlar�m�zda Bulunamad�');
			}
			else
			{
				$newpw = strtolower(chars());
				$row = $db->rs(true);
				$db->sql("UPDATE users SET password = '".$newpw."' WHERE id = '".$row['id']."'");
				$db->query();
				
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "From: sunucu@oyunkurucusu.com\r\n";
				$headers .= "Reply-To: sunucu@oyunkurucusu.com\r\n";
				$headers .= "Return-Path: sunucu@oyunkurucusu.com\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-9\r\n";  
				$headers .= "Content-Type: text/html; charset=iso-8859-9\r\n";
				$headers .= "Date: ".date('D, d M Y H:i:s')." +0000\r\n";
				$headers .= "	".date('D, d M Y H:i:s')." GMT\r\n";
				$headers .= "X-Mailer: PHP\r\n";
				$headers .= "X-Priority: 1\r\n";
				
				$mesaj = "OyunKurucusu.Com $row[username] i�in yeni �ifreniz : <b>$newpw</b>'dir \r\n<br />";
				
				@mail($row['email'],'OyunKurucusu �ifre Hat�rlatma',$mesaj,$headers);
				$smarty->assign('error','Yeni �ifreniz E-Posta Adresinize G�nderildi. <br /> Baz� Hatalar Sonucu Posta Gereksiz Kutusuna D��ebilir.');
				
			}
		}
	}
		
	$smarty->display('lostpw.tpl');
?>