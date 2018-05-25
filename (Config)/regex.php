<?php
	
	//////////   CONFIGURATION DE LA BASE DE DONNEES   \\\\\\\\\\
	
	// Nom, prénom, ville
	$_SESSION['regex_nom'] = "#^[a-zA-Zéèêàç-]{2,}$#";
	
	// Code postal français
	$_SESSION['regex_code_postal'] = "/^[0-9]{5}$/";
	
	// Adresse e-mail
	$_SESSION['regex_email'] = "/^[^\W][a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,4}$/";
	
	// Numéro de téléphone portable français
	$_SESSION['regex_tel'] = "/^0[6-7][0-9]{8}$/";
	
?>