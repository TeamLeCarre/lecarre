<?php
	function isLogged()
	{
		return ((isset($_SESSION['id']) && isset($_SESSION['code'])));
	}

	function verifierEmail($email)
	{
		$requete = "SELECT COUNT(*) as res FROM usager WHERE email='".$email."';";
		$bdd = bdOpen();
		$count = requete($bdd, $requete)->fetch();
		bdClose($bdd);
		if ($count['res'] != '0')
		{
			return false;
		}
		else return true;
	}

	function verification($nom, $prenom, $date, $email, $cp, $ville, $mdp, $mdp2)
	{
		$status = "";
		
		if (!regex($prenom, 'nom'))
		{
			$status = "PRENOM_INVALIDE ";
		}
		
		if (!regex($nom, 'nom'))
		{
			$status = $status."NOM_INVALIDE ";
		}
		
		if (getAge($date) < 16)
		{
			$status = $status."TROP_JEUNE (".$date.") ";
		}
		
		if (!regex($email, 'email'))
		{
			$status = $status."EMAIL_INVALIDE ";
		}
		
		if (!verifierEmail($email))
		{
			$status = $status."EMAIL_UTILISE ";
		}
		
		if (!regex($cp, 'code_postal'))
		{
			$status = $status."CP_INVALIDE ";
		}
		
		if (!regex($ville, 'nom'))
		{
			$status = $status."VILLE_INVALIDE ";
		}
		
		if (!preg_match("/^.{10,}$/", $mdp) || !preg_match("/[0-9]{1,}/", $mdp))
		{
			$status = $status."MDP_INVALIDE ";
		}
		
		if ($mdp != $mdp2)
		{
			$status = $status."MDP_DIFFERENTS ";
		}
		
		if ($status == "")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function verifierCode($code)
	{
		$requete = "SELECT COUNT(*) as res FROM usager WHERE code='".$code."';";
		$bdd = bdOpen();
		$count = requete($bdd, $requete)->fetch();
		bdClose($bdd);
		if ($count['res'] != '0')
		{
			return false;
		}
		else return true;
	}
	
	function genererCode()
	{
		do
		{
			$code = "";
			for ($i = 0; $i < 8; $i++)
			{
				$code = $code.rand(0,9);
			}
		}
		while (!verifierCode($code));
		
		return $code;
	}

	function inscription($nom, $prenom, $date, $email, $cp, $ville, $mdp, $mdp2)
	{
		if (verification($nom, $prenom, $date, $email, $cp, $ville, $mdp, $mdp2))
		{
			$nom = securiserChaine($nom);
			$prenom = securiserChaine($prenom);
			$email = strtolower($email);
			$ville = securiserChaine($ville);
			$mdp = cryptage($mdp);
			$code = genererCode();
			$requete = "INSERT INTO usager VALUES(DEFAULT, '".$nom."', '".$prenom."', '".$date."', '".$email."', '".$cp."', '".$ville."', '".$mdp."', '".$code."', '', NOW(), 0);";
			$bdd = bdOpen();
			update($bdd, $requete);
			bdClose($bdd);
			return true;
		}
		else return false;
	}
	
	function connexion($email, $mdp)
	{
		$mdp = cryptage($mdp);
		$requete = "SELECT COUNT(id) as res FROM usager WHERE email='".$email."' AND mdp='".$mdp."'";
		$bdd = bdOpen();
		
		$reponse = requete($bdd, $requete);
		$reponse = $reponse->fetch();
		$reponse = $reponse['res'];
		
		bdClose($bdd);
		
		if ($reponse == "1")
		{
			$requete = "SELECT id, code FROM usager WHERE email='".$email."' AND mdp='".$mdp."'";
			$bdd = bdOpen();
			
			$reponse_2 = requete($bdd, $requete);
			$reponse_2 = $reponse_2->fetch();
			$_SESSION['id'] = $reponse_2['id'];
			$_SESSION['code'] = $reponse_2['code'];
			
			bdClose($bdd);
			return true;
		}
		else
		{
			return false;
		}
	}
?>