<?php
	function securiserChaine($chaine)
	{
		return ucfirst(strtolower(htmlspecialchars($chaine)));
	}
	
	function cryptage($chaine)
	{
		return sha1(sha1($chaine));
	}
	
	function regex($chaine, $type)
	{		
		return preg_match($_SESSION["regex_".$type], $chaine);
	}
?>