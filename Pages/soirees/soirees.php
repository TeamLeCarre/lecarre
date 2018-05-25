<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	session_start();
	$_SESSION["connexion_erreur"] = "";
	
	include_once("../../Tools/bdd.php");
	include_once("../../Tools/usager.php");
	include_once("../../Tools/soiree.php");
	
	include_once("soirees_vue.php");
?>