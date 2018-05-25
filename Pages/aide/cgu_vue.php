<!DOCTYPE HTML>
<html>
	<?php include_once("../composants/meta.php"); ?>
	<body>
		<?php include_once("../composants/header.php"); ?>
		<script type='text/javascript' src='../../JS/toggle_connexion_inscription.js'></script>
		<script type='text/javascript' src='../../JS/jquery.js'></script>
		<script type='text/javascript' src='../../JS/screen.js'></script>
		<script type='text/javascript' src='../../JS/vicopo.js'></script>
		<script type='text/javascript' src='../../JS/tools_client.js'></script>
		<h1>Conditions d'Utilisation <?php include("../composants/version.php"); ?></h1>
		Veuillez bien lire ceci avant d'utiliser notre site.
		<br />
		<?php 
			include_once("cgu_1_general.php"); 
			/* include_once("cgu_2_soiree.php"); 
			include_once("cgu_3_covoiturage.php");
			include_once("cgu_4_pratiques.php");
			include_once("cgu_5_forum.php"); */
		?>
		<br /><br /><br />
		<div onclick='go("compte/moi")' class='carre--gros-bouton'>
			J'AI COMPRIS !
		</div>
	<body>
</html>