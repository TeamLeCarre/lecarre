<?php
	function afficherSoiree($id)
	{
		$requete = "SELECT titre, type, DATE_FORMAT(debut, '%e-%m à %H.%i') as date, ville, confidentialite, personnes_max, parking, alcool, description FROM soiree WHERE id=".$id.";";
		$bdd = bdOpen();
		
		$reponse_2 = requete($bdd, $requete);
		$reponse_2 = $reponse_2->fetch();
		
		switch ($reponse_2['confidentialite'])
		{
			case "0":
				$conf = "Soirée publique";
				break;
				
			case "1":
				$conf = "Soirée certifiée";
				break;
				
			case "2":
				$conf = "Soirée ouverte";
				break;
				
			case "3":
				$conf = "Soirée privée";
				break;
				
			case "4":
				$conf = "Soirée secrète";
				break;
		}
		
		switch ($reponse_2['parking'])
		{
			case "1":
				$park = " - Parking : Privé";
				break;
				
			case "2":
				$park = " - Parking : Gratuit";
				break;
				
			case "3":
				$park = " - Parking : Payant";
				break;
				
			default:
				$park = "";
				break;
		}
		
		echo "<div class='nob--ligne-5 carre--soiree'>
			<div class='nob--colonne-7 carre--soiree-image-container'>
				<img class='carre--soiree-image' src='(Images)/Soirees/".$id.".jpg' />
			</div>
			<div class='nob--colonne-13'>
				<div class='carre--soiree-titre'>
					".$reponse_2['titre']."
				</div>
				<div class='carre--soiree-soustitre'>
					".$reponse_2['ville']." - 0/".$reponse_2['personnes_max']." personnes
					<br />
					".$reponse_2['date']."
				</div>
				<br />
				<div class='carre--soiree-desc'>
					".$reponse_2['description']."
				</div>
				<div class='carre--soiree-infos'>
					".$conf." - Alcool : ".($reponse_2['alcool'] == "1" ? "Oui" : "Non").$park."
				</div>
			</div>
		</div>";
		
		bdClose($bdd);
	}
	
	function listing($usager)
	{
		// Plus tard, afficher uniquement les soirées visibles par l'usager (50 par page)
		$requete = "SELECT id FROM soiree ORDER BY debut";
		$bdd = bdOpen();
		
		$reponse_2 = requete($bdd, $requete);
		while ($reponse = $reponse_2->fetch())
		{
			afficherSoiree($reponse['id']);
		}
	}
?>