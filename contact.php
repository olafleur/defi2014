<?php include("header.php") ?>
	<div class="starter-template">
		<h1 class="beaufont">Contact</h1>

		<div class="espacementquestions">Des questions? Contactez-nous!</div>

		<form method="post" action="contact-send.php" onsubmit="return verify()">
			<label for="nom">Nom
				<input type="text" id="nom" name="nom" placeholder="Entrez votre nom...">
			</label><br>
			<label for="nom">Prénom
				<input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom...">
			</label><br>
			<label for="email">Courriel
				<input type="email" id="email" name="email" placeholder="Entrez votre courriel...">
			</label><br>
			<label for="message">Message
				<textarea id="message" name="message" rows="10" cols="40"></textarea>
			</label><br>
			<button type="submit">Envoyer votre message</button>
		</form>

		<br>
		<br>

		<iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2732.7714938384447!2d-71.2842963!3d46.769400399999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb896cd2a003fdf%3A0xe581c182930cf040!2s2700+Boulevard+Laurier!5e0!3m2!1sfr!2s!4v1396122573374"
			width="800" height="600"></iframe>
	</div>

<script language="JavaScript">
	function verify(){
		if(!document.getElementById('nom').value.trim().length){
			alert("Veuillez entrer votre nom");
			return false;
		}

		if(!document.getElementById('prenom').value.trim().length){
			alert("Veuillez entrer votre prénom");
			return false;
		}

		if(!document.getElementById('email').value.trim().length){
			alert("Veuillez entrer votre courriel");
			return false;
		}

		if(!document.getElementById('message').value.trim().length){
			alert("Veuillez entrer un message");
			return false;
		}

		return true;
	}
</script>
<?php include("footer.php") ?>