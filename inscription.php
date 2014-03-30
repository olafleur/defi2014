<?php include("header.php") ?>
	<div class="starter-template">
		<h1 class="beaufont">Inscription au Défi allaitement 2014</h1>

		<form method="post" action="inscription-envoi.php" onsubmit="return verify()">
			<label for="nom">Nom</label>
			<input class="spacing" type="text" id="nom" name="nom" placeholder="Entrez votre nom...">
			<br>
			<label for="nom">Prénom</label>
			<input class="spacing" type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom...">
			<br>
			<label for="nombebe">Nom du bébé</label>
			<input class="spacing" type="text" id="nombebe" name="nombebe" placeholder="Entrez le nom du bébé">
			<br>
			<label for="email">Courriel</label>
			<input class="spacing" type="email" id="email" name="email" placeholder="Entrez votre courriel...">
			<br><br>
			<label for="lieu">Où avez-vous entendu parler du Défi Allaitement?</label><br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Internet">Internet<br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Publi-sac">Publi-sac<br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Organismes allaitement">Organismes allaitement<br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Hôpitaux/CSSS">Hôpitaux/CSSS<br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Bouche à Oreille">Bouche à Oreille<br>
			<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Autres">Autres<br>

			<br>
			<button type="submit">S'inscrire au Défi Allaitement 2014</button>
		</form>

		<br><br>
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

			if (!document.getElementById('nombebe').value.trim().length) {
				alert("Veuillez entrer le nom du bébé");
				return false;
			}

			return true;
		}
	</script>

<?php include("footer.php") ?>