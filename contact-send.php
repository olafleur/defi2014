<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->From = 'do-not-reply@defiallaitementquebec.com';
$mail->FromName = 'Défi Allaitement Québec';
$mail->addAddress('olivier.lafleur@gmail.com', 'Olivier Lafleur');  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
	exit;
}

echo 'Message has been sent';