<?php include("header.php") ?>
	<div class="starter-template">
		<img src=images/logo-couleur.png>
		<h1 class="beaufont fontgris">Inscription au Défi allaitement 2015</h1>
		<center>
		<div class="backrose" style="width:70%">
			<form method="post" action="inscription-envoi.php" onsubmit="return verify()">
				<label for="nom">Nom</label>
				<input class="spacing" type="text" id="nom" name="nom" placeholder="Entrez votre nom">
				<br>
				<label for="nom">Prénom</label>
				<input class="spacing" type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
				<br>
				<label for="nombebe">Nom du bébé</label>
				<input class="spacing" type="text" id="nombebe" name="nombebe" placeholder="Entrez le nom du bébé">
				<br>
				<label for="email">Courriel</label>
				<input class="spacing" type="email" id="email" name="email" placeholder="Entrez votre courriel">
				<br><br>
				<b>Où avez-vous entendu parler<br> du Défi Allaitement?</b><br>
				<center>
					<div style="width:50%;text-align: left">
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Internet">&nbsp;Internet<br>
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Publi-sac">&nbsp;Publi-sac<br>
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]"
						       value="Organismes allaitement">&nbsp;Organismes
						allaitement<br>
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Hôpitaux/CSSS">&nbsp;Hôpitaux/CSSS<br>
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Bouche à Oreille">&nbsp;Bouche
						à Oreille<br>
						<input class="aligncheckbox" type="checkbox" id="lieu" name="lieu[]" value="Autres">&nbsp;Autres<br>
					</div>
				</center>
				<br>
				<button type="submit">S'inscrire au Défi Allaitement 2015</button>
			</form>
		</div>
		</center>
		<br><br>
		<center>
			<div style="text-align:center; width:60%">
				Si vous préférez, vous pouvez laisser un message sur la boîte vocale de <span class="beaufont"><a href="http://chantelait.org" style="color: #666666">Chantelait</a></span> (groupe d'entraide en
				allaitement).<br>
				<span class="beaufont" style="color: #666666">418-877-5333</span>
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

			if (!document.getElementById('nombebe').value.trim().length) {
				alert("Veuillez entrer le nom du bébé");
				return false;
			}

			return true;
		}
	</script>

<?php include("footer.php") ?>