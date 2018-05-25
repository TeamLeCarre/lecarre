<!DOCTYPE HTML>
<html>
	<?php include_once("../composants/meta.php"); ?>
	<body>
		<?php include_once("../composants/header.php"); ?>
		<script type='text/javascript' src='../../JS/toggle_connexion_inscription.js'></script>
		<script type='text/javascript' src='../../JS/jquery.js'></script>
		<script type='text/javascript' src='../../JS/screen.js'></script>
		<script type='text/javascript' src='../../JS/vicopo.js'></script>
		<script type='text/javascript' src='../../JS/inscription.js'></script>
		<h1>Connexion</h1>
		<br /><br />
		<form enctype='multipart/form-data' method='POST' action='' class='carre--form-connexion'>
			<div class='carre--soiree-infos-titre'>
				CONNECTEZ-VOUS POUR REJOINDRE LE CARRÉ
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Adresse e-mail
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='text' name='email_c' maxlength='64' placeholder='xyz@example.com' value="<?php echo (isset($_SESSION["email"]) ? $_SESSION["email"]: ""); ?>"/>
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					mot de passe
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='password' name='mdp_c' maxlength='64' placeholder='azertyuiop123' />
				</div>
			</div>
			<div class='erreur'>
			</div>
			<div onclick='connexion()' class='carre--gros-bouton carre--gros-bouton-releve'>
				CONNEXION
			</div>
			<div onclick='toggle()' class='carre--gros-bouton-rose'>
				INSCRIPTION
			</div>
			<input class='carre--input' type='submit' id='submit_c' name='submit_c' style='display: none;' />
		</form>
		<form enctype='multipart/form-data' method='POST' action='' class='carre--form-inscription invisible'>
			<div class='carre--soiree-infos-titre'>
				BRAVO, VOUS AVEZ PRIS LA BONNE DÉCISION.
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Prénom
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='text' name='prenom' maxlength='32' placeholder='Jean' />
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Nom
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='text' name='nom' maxlength='32' placeholder='Dupont' />
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Né(e) le
				</div>
				<div class='nob--colonne-13 carre--form-date'>
					<?php include_once("../composants/select_date.php"); ?>
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Code postal
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' id='ville' type='text' name='cp' maxlength='5' placeholder='64000' />
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Ville
				</div>
				<div class='nob--colonne-13'>
					<select onclick='cpChoisi()' class='carre--input' dir='rtl' id='ville2' name='ville' style="display: none;">
						<option data-vicopo-ville data-vicopo="#ville"></option>
					</select>
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					Adresse e-mail
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='text' name='email_i' maxlength='64' placeholder='xyz@example.com' />
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					mot de passe
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='password' name='mdp_i' maxlength='64' placeholder='azertyuiop123' />
				</div>
			</div>
			<div class='nob--ligne-1 carre--soiree-information'>
				<div class='nob--colonne-7 carre--soiree-info-nom'>
					confirmation
				</div>
				<div class='nob--colonne-13'>
					<input class='carre--input' type='password' name='mdp2_i' maxlength='64' placeholder='azertyuiop123' />
				</div>
			</div>
			<input class='carre--input' type='text' id='dateNaissance' name='date' style='display: none;' />
			<input class='carre--input' type='submit' id='submit' name='submit_i' style='display: none;' />
			<div class='erreur'>
			</div>
			<div onclick='validation()' class='carre--gros-bouton carre--gros-bouton-releve'>
				INSCRIPTION
			</div>
			<div onclick='toggle()' class='carre--gros-bouton-rose'>
				CONNEXION
			</div>
		</form>
		<?php include_once("../composants/footer.php"); ?>
	<body>
	<script type="text/javascript">
		document.addEventListener("keydown", function(e){if (e.keyCode==13) e.preventDefault()} );
	</script>
	<script type='text/javascript'>
		if (<?php echo ($_SESSION["connexion_erreur"] != null ? $_SESSION["connexion_erreur"] : "false"); ?>)
		{
			refuserConnexion();
		}
	</script>
</html>