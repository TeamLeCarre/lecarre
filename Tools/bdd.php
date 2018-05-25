<?php
	include_once("../../(Config)/BD.php");
	
	function bdOpen()
	{
		return new PDO('mysql:host='.$_SESSION['bd_adresse'].';dbname='.$_SESSION['bd_nom'].';charset=utf8', $_SESSION['bd_user'], $_SESSION['bd_mdp']);
	}
		
	function bdClose($bdd)
	{
		unset($bdd);
	}
	
	function requete($bdd, $requete)
	{
		$reponse = $bdd->query($requete);
		return ($reponse);
	}
	
	function update($bdd, $requete)
	{
		$bdd->exec($requete);
	}
?>