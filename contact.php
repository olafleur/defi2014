<?php include("header.php") ?>
	<div class="starter-template">
		<img src=images/logo-couleur.png>
		<h1 class="beaufont fontgris">Des questions? Contactez-nous!</h1>

		<center>
			<div class="backrose" style="width:70%">

				<form method="post" action="contact-envoi.php" onsubmit="return verify()">
					<label for="nom">Nom</label>
					<input class="spacing" type="text" id="nom" name="nom" placeholder="Entrez votre nom">
					<br>
					<label for="nom">Prénom</label>
					<input class="spacing" type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
					<br>
					<label for="email">Courriel</label>
					<input class="spacing" type="email" id="email" name="email" placeholder="Entrez votre courriel">
					<br>
					<label for="message">Message</label>
					<textarea id="message" name="message" rows="10" cols="40"></textarea>
					<br><br>
					<button type="submit">Envoyer votre message</button>
				</form>
			</div>
		</center>

		<br>
		<br>
		<center>
			<div style="text-align:center; width:60%">
				Si vous préférez, vous pouvez laisser un message sur la boîte vocale de <span class="beaufont"><a href="http://chantelait.org" style="color: #666666">Chantelait</a></span> (groupe d'entraide en
				allaitement) et nous nous ferons un plaisir de vous rappeler dans les plus brefs délais.<br>
				<span class="beaufont" style="color: #666666">418-877-5333</span>
			</div>
		</center>

		<br><br>

		<center>
		<div class="backbleu" style="width:78%;padding-top:30px">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2730.0613545634205!2d-71.25451864845729!3d46.82279287903813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb89646fccd4a35%3A0xd2e169828d451473!2s552+Boulevard+Wilfrid-Hamel%2C+Ville+de+Qu%C3%A9bec%2C+QC+G1M+4B3!5e0!3m2!1sfr!2sca!4v1464651896519"
				width="800" height="600">
			</iframe>
		</div>
		</center>
	</div>

	<script language="JavaScript">
		function verify() {
			if (!document.getElementById('nom').value.trim().length) {
				alert("Veuillez entrer votre nom");
				return false;
			}

			if (!document.getElementById('prenom').value.trim().length) {
				alert("Veuillez entrer votre prénom");
				return false;
			}

			if (!document.getElementById('email').value.trim().length) {
				alert("Veuillez entrer votre courriel");
				return false;
			}

			if (!document.getElementById('message').value.trim().length) {
				alert("Veuillez entrer un message");
				return false;
			}

			return true;
		}
	</script>
<?php include("footer.php") ?>
