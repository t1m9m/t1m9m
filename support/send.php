<?php
require '../phpmailer/PHPMailerAutoload.php';

$mail 				= 	new PHPMailer;
$mail->isSMTP();
$mail->Host 		= 	'smtp.gmail.com';
$mail->SMTPAuth 	= 	true;
$mail->Username 	= 	't1m9m.com@gmail.com';
$mail->Password 	= 	'qyzvmiaxhrdzzwke';
$mail->SMTPSecure	=	'tls';
$mail->Port = 587;

$mail->setFrom($_POST['email']);
$mail->addAddress('t1m9m.com@gmail.com');
$mail->isHTML(true);
$mail->Subject 		= 	$_POST['subject'];
$mail->Body    		= 	$_POST['description'];

$mail->send();
