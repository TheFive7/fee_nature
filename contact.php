<!DOCTYPE html>
<html>
<head>
	<title>La p'tite Fée Nature</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include("header.php") ?>

	<main>
		<div class="texte">
			<p>
				Pour toute demande d'informations, réservations ou commande de bons cadeaux veuillez m'envoyer un petit message à l'aide du formulaire suivant et je vous répondrais dans les plus bref délais. <br>
				Ce formulaire ne collecte pas vos données, elles sont uniquement utilisées pour envoyer votre mail.
			</p>

			<img src="assets/image2_contact.jpg" id="image2Contact" alt="Image Zen">

			<form action="traitement.php" id="form" method="post">
				<fieldset style="width: 50%;">
					<!-- Civilité -->
					<label>Civilité :</label>
					    <input type="radio" name="civilite" value="M." checked="yes">M.
	      				<input type="radio" name="civilite" value="Mme" >Mme.

	      			<!-- Nom -->
	      			<div id="divNom">
		      			<br>
						<label>Nom</label>
						<br>
						<textarea type="text" name="nom" class="textfield" rows="1" required></textarea>
					</div>

					<!-- Prénom -->
					<div id="divPrenom">
						<br>
						<label>Prénom</label>
						<br>
						<textarea type="text" name="prenom" class="textfield" rows="1" required></textarea>
					</div>

					<!-- Email -->
					<div id="divEmail">
						<br>
						<label>Email</label>
						<br>
						<textarea type ="email" name="mail" class="textfield" pattern="(^[a-z0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})" rows="1" required></textarea>
					</div>

					<!-- Téléphone -->
					<div id="divTelephone">
						<br>
						<label>Téléphone</label>
						<br>
						<textarea type="text" name="telephone" class="textfield" pattern="^0[0-9]{9}$" rows="1" required></textarea>
					</div>
					<br>

					<!-- Sujet -->
					<div id="divSujet">
						<br>
						<label>Sujet</label>
						<br>
						<textarea type="text" name="sujet" class="textfield" rows="1" required></textarea>
					</div>

					<!-- Message -->
					<div id="divMessage">
						<br>
						<label>Message</label>
						<br>
						<textarea name="message" cols="50" id="message" rows="5" required></textarea>
					</div>

					<br>

					<!-- Validation -->
					<button type="submit" name="envoyer">Envoyer</button>

				</fieldset>
			</form>
		</div>
	</main>

	<?php include("footer.php") ?>
</body>
<script>
    form = document.getElementById('form')
    if (window.innerWidth < 1000) {
        form.style.paddingLeft = '1%'
    }

    imageContact = document.getElementById('image2Contact')
    if (window.innerWidth < 1000) {
        imageContact.style.display = 'none'
    }
</script>
</html>
