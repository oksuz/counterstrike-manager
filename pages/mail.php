<?php


$mail = new PHPMailer();
$mail->ContentType = "text/html";
$mail->SetLanguage( 'en' );
$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.oyunkurucusu.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "bilgi@oyunkurucusu.com";  // SMTP username
$mail->Password = "anonmail"; // SMTP password

$mail->From     = "bilgi@oyunkurucusu.com"; // Sender
$mail->Fromname = "OyunKurucusu.com";
$mail->AddAddress("yunusoksuz@hotmail.com.tr");
$mail->Subject  =  "OyunKurucusu Bildiri";
$mail->Body     =  "Deneme asd";

if($mail->Send())
{
  
}



?>
	
