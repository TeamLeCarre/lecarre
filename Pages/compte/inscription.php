<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	session_start();
	$_SESSION["connexion_erreur"] = "";
	
	include_once("../../Tools/bdd.php");
	include_once("../../(Config)/regex.php");
	include_once("../../Tools/string.php");
	include_once("../../Tools/date.php");
	include_once("../../Tools/page.php");
	include_once("../../Tools/erreur.php");
	include_once("../../Tools/debug.php");
	include_once("../../Tools/usager.php");
	
	if (isLogged())
	{
		go("/compte/moi");
	}
	
	if (isset($_POST['submit_i']))
	{
		if (inscription($_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['email_i'], $_POST['cp'], $_POST['ville'], $_POST['mdp_i'], $_POST['mdp2_i']))
		{
			go("/aide/cgu");
		}
		else
		{
			erreur("31");
		}
	}

	if (isset($_POST['submit_c']))
	{
		if (connexion($_POST['email_c'], $_POST['mdp_c']))
		{
			go("/compte/moi");
		}
		else
		{
			$_SESSION["connexion_erreur"] = "true";
			$_SESSION["email"] = $_POST['email_c'];
		}
	}
	
	include_once("inscription_vue.php");
?>