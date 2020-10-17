<?php
	ini_set('SMTP', "SMTP.office365.com");
	ini_set('smtp_port', '585');

	// Un destinataire
	$to  = "corentin.sarlin@epitech.eu";

	// Sujet
	$subject = 'Contacte';

	// message
	$message = 'Vous avez été contactez par ' . $_GET['last_name'] . ' ' . $_GET['first_name'] . ', il vous a laissé ce message : ' . $_GET['message'];

	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-Type: text/html; charset="utf-8"';

	// En-têtes additionnels
	$headers[] = 'From: <' . $_GET['email'] . '>';

	// lancement de la requête SQL avec selectByName et
	// récupération du résultat de la requête SQL

	$resultat = mail($to, $subject, $message, implode("\r\n", $headers));

	// affichage en format JSON du résultat précédent
	echo json_encode($resultat);
?>