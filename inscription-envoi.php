<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

if (!isset($_POST['nom'])) {
	exit;
}

$mail->From = $_POST['email'];
$mail->FromName = $_POST['prenom'] . " " . $_POST['nom'];
$mail->addAddress("emmanuela.diaz@videotron.ca"); // Add a recipient

$mail->WordWrap = 50; // Set word wrap to 50 characters
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'Défi Allaitement Québec - Inscription';
$mail->Body = 'Vous avez reçu une inscription de la part de <b>' . stripslashes($_POST['prenom']) . " " . stripslashes($_POST['nom']) . "</b><br>Son bébé s'appelle <b>" . stripslashes($_POST["nombebe"]) . "</b><br>Endroits où elle a entendu parler de nous :<br>";
$mail->AltBody = 'Vous avez reçu une inscription de la part de ' . stripslashes($_POST['prenom']) . " " . stripslashes($_POST['nom']) . "Son bébé s'appelle " . stripslashes($_POST["nombebe"]) . "\nEndroits où elle a entendu parler de nous : " . stripslashes($_POST["lieu"]);
foreach ($_POST['lieu'] as $lieu) {
	$mail->Body .= "- " . $lieu . "<br>";
	$mail->AltBody .= "- " . $lieu . "<br>";
}

include("header.php") ?>
	<div class="starter-template">

		<?php

		if (!$mail->send()) {
			echo 'Une erreur s\'est produite. Impossible d\'envoyer le courriel';
			echo 'Erreur: ' . $mail->ErrorInfo;
			exit;
		}

		echo 'Vous êtes maintenant inscrite au Défi Allaitement 2016. Félicitations!<br><a href="index.php">Retourner à la page principale</a>'; ?>

	</div>

<?php include("footer.php") ?>
