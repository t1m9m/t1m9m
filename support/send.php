<?php
require '../phpmailer/PHPMailerAutoload.php';

$mail 				= 	new PHPMailer;
$mail->isSMTP();
$mail->Host 		= 	'smtp.gmail.com';
$mail->SMTPAuth 	= 	true;
$mail->Username 	= 	't1m9m.com@gmail.com';
$mail->Password 	= 	'qyzvmiaxhrdzzwke';
$mail->SMTPSecure	=	'tls';
$mail->Port 		= 	587;

$mail->setFrom($_POST['email'], 'Support Form');
$mail->addReplyTo($_POST['email']);
$mail->addAddress('t1m9m.com@gmail.com');
$mail->isHTML(true);
$mail->Subject 		= 	$_POST['subject'];
$mail->Body    		= 	'<b>Support Type</b>: ' . $_POST['type'] . '<br><br><b>Product</b>: ' . $_POST['product'] . '<br><b>Purchase Code</b>: ' . $_POST['code'] . '<br><b>Description</b>: ' . $_POST['description'];

$mail->send();
