<?php

//error_reporting(E_ALL);
require("PHPMailer-5.2/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug  = 2;
$mail->From = "lispectorplataforma@gmail.com"; // <-------------------------------------------------------------------------------------
$mail->FromName = "Plataforma Lispector"; // <-------------------------------------------------------------------------------------
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure= "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "lispectorplataforma@gmail.com"; // <-------------------------------------------------------------------------------------
$mail->Password = "senha"; // <-------------------------------------------------------------------------------------
$mail->WordWrap = 50

//NAO DEBUGAR MENSAGENS
//$mail->SMTPDebug = false;

$mail->IsHTML(true); // set email format to HTML

$EMAILDAPESSOA = 0;





$mail->AddAddress($EMAILDAPESSOA, "Joao da Silva"); // <-------------------------------------------------------------------------------------


$mail->Subject = "Assunto"; // <-------------------------------------------------------------------------------------
$mail->Body = "Corpo do email"; // <-------------------------------------------------------------------------------------


if($mail->Send())
{

}


?>