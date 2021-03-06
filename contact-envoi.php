<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

if (!isset($_POST['message'])) {
	exit;
}

$mail->From = $_POST['email'];
$mail->FromName = stripslashes($_POST['prenom']) . " " . stripslashes($_POST['nom']);
$mail->addAddress("Swim_alex@hotmail.com"); // Add a recipient

$mail->WordWrap = 50; // Set word wrap to 50 characters
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'Défi Allaitement Québec - Commentaire';
$mail->Body = 'Vous avez reçu un commentaire de <b>' . stripslashes($_POST['prenom']) . " " . stripslashes($_POST['nom']) . "</b><br><b>Message</b> : " . stripslashes($_POST['message']);
$mail->AltBody = 'Vous avez reçu un commentaire de ' . stripslashes($_POST['prenom']) . " " . stripslashes($_POST['nom']) . "\nMessage : " . stripslashes($_POST['message']);

include("header.php") ?>
	<div class="starter-template">

		<?php

		if (!$mail->send()) {
			echo 'Une erreur s\'est produite. Impossible d\'envoyer le courriel';
			echo 'Erreur: ' . $mail->ErrorInfo;
			exit;
		}

		echo 'Le message a bien été envoyé<br><a href="index.php">Retourner à la page principale</a>'; ?>

	</div>

<?php include("footer.php") ?>