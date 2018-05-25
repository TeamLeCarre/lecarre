<?php
	include_once("../../Tools/usager.php");
	include_once("../../Tools/page.php");

	if (!isLogged())
	{
		go("/compte/inscription");
	}
?>