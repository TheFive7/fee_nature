<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css" type="text/css">
</head>
<main>
	<div id="barreTitre">
		<div id="titre">
			<h1>
				La p'tite Fée Nature
			</h1>
		</div>
        <div id="sousTitre"> - Esprit Nature & Zen - </div>
        <div>
			<img src="assets/logo.PNG" id="logo" alt="Logo">
		</div>
	</div>
	<br>
	<div class="liens" id="ok">
		<a href="index.php?id=0" id="accueil">
			<?php if (isset($_GET['id'])){
				if ($_GET['id'] == 0){ ?>
					<strong>Accueil</strong>
				<?php } else { ?>
					Accueil
				<?php }} else { ?>
					Accueil
				<?php }
			?>
		</a> -

		<a href="tarif.php?id=4" id="tarif">
			<?php if (isset($_GET['id'])){
				if ($_GET['id'] == 4){ ?>
					<strong>Tarifs</strong>
				<?php } else { ?>
					Tarifs
				<?php }} else { ?>
					Tarifs
				<?php }
			?>
		</a> -
		<a href="contact.php?id=5" id="contact">
			<?php if (isset($_GET['id'])){
				if ($_GET['id'] == 5){ ?>
					<strong>Contact</strong>
				<?php } else { ?>
					Contact
				<?php }} else { ?>
					Contact
				<?php }
			?>
		</a> -

        <li class="menu-deroulant" style="list-style-type: none; display: inline;">
            <a href="#">Massages</a>
            <ul class="sous-menu" style="list-style-type: none; width: 100%; margin-top: -0.2%; margin-bottom: 0.5%;">
                <li>
                    <a href="massage.php?id=1" id="massage">
                        <?php if (isset($_GET['id'])){
                            if ($_GET['id'] == 1){ ?>
                                <strong>Massage 5 Continents</strong>
                            <?php } else { ?>
                                Massage 5 Continents
                            <?php }} else { ?>
                            Massage 5 Continents
                        <?php }
                        ?>
                    </a>
                </li>
                <li>
                    <a href="massage_shinzu.php?id=2" id="massage_shinzu">
                        <?php if (isset($_GET['id'])){
                            if ($_GET['id'] == 2){ ?>
                                <strong>Massage Shinzu</strong>
                            <?php } else { ?>
                                Massage Shinzu
                            <?php }} else { ?>
                            Massage Shinzu
                        <?php }
                        ?>
                    </a>
                </li>
                <li>
                    <a href="massage_happy_zen.php?id=3" id="massage_happy_zen">
                        <?php if (isset($_GET['id'])){
                            if ($_GET['id'] == 3){ ?>
                                <strong>Massage Happy Zen</strong>
                            <?php } else { ?>
                                Massage Happy Zen
                            <?php }} else { ?>
                            Massage Happy Zen
                        <?php }
                        ?>
                    </a>
                </li>
            </ul>
        </li>
<!--		<a href="just.php?id=6" id="just">
			<?php if (isset($_GET['id'])){
				if ($_GET['id'] == 6){ ?>
					<strong>Produits JUST</strong>
				<?php } else { ?>
					Produits JUST
				<?php }} else { ?>
					Produits JUST
				<?php }
			?>
		</a> -
		<a href="astuce.php?id=7" id="astuce">
			<?php if (isset($_GET['id'])){
				if ($_GET['id'] == 7){ ?>
					<strong>Astuces & Conseils</strong>
				<?php } else { ?>
					Astuces & Conseils
				<?php }} else { ?>
					Astuces & Conseils
				<?php }
			?>
		</a>-->
	</div>
</main>
<script>
    liens = document.getElementsByClassName('liens')[0]
    if (window.innerWidth < 1700 && window.innerWidth > 1000) {
        liens.style.marginTop = '3em'
    } else if (window.innerWidth < 1000) {
        liens.style.marginTop = '3em'
    }

    sousTitre = document.getElementById('sousTitre')
    if (window.innerWidth < 1700 && window.innerWidth > 1000) {
        sousTitre.style.position = 'absolute'
    } else if (window.innerWidth < 1000) {
        sousTitre.style.position = 'absolute'
        sousTitre.style.marginTop = '-17%'
    }
</script>
</html>
