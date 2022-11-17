<?php
	$msg_erreur = "Les champs doivent être remplis.";
	$msg_accompli = "Le mail a bien été envoyé.";
	$message = $msg_erreur;

	define('MAIL_DESTINATAIRE','alexandra.clog@gmail.com');
	define('MAIL_SUJET',$_POST['sujet']);

	// Vérification des champs
	if (empty($_POST['telephone'])) 
	$message .= "Non donné<br/>";
	if (empty($_POST['message'])) 
	$message .= "Aucun message<br/>";

	//Préparation de l'entête du mail:
	$mail_entete  = "MIME-Version: 1.0\r\n";
	$mail_entete .= "From: {$_POST['nom']} "
	             ."<{$_POST['mail']}>\r\n";
	$mail_entete .= 'Reply-To: '.$_POST['mail']."\r\n";
	$mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
	$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
	$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";
	 
	// Préparation du corps du mail
	$mail_corps  = "Message de : " . $_POST['civilite'] . " " . $_POST['nom'] . " " . $_POST['prenom'] . "\n";
	$mail_corps .= "Email: " . $_POST['mail'] . " ; Telephone : " . $_POST['telephone'] ."\n\n";
	$mail_corps .= $_POST['message'];

	// Fonction qui convertit en utf-8
	function utf($str) {
    	return iconv ( 'utf-8', 'ISO-8859-1' , $str );
	}
	 
	// Envoi du mail
	if (mail(MAIL_DESTINATAIRE,utf(MAIL_SUJET),utf($mail_corps),$mail_entete)) {
	  //Le mail est bien expédié
	  echo $msg_accompli;
	} else {
	  //Le mail n'a pas été expédié
	  echo "Une erreur est survenue, merci de vérifier si votre adresse mail est correcte ou alors soyez plus Zen et envoyez moins de mails.\n
	  Si l'erreur persiste, contacter l'opérateur du site.";
	}
?>