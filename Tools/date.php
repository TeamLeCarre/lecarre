<?php	
	function getAge($date_naissance) 
	{
		date_default_timezone_set('Europe/Paris');
		$date_today = new DateTime();
		$date_naissance = new DateTime($date_naissance);
		$interval = $date_naissance->diff($date_today);
		return $interval->format('%y');
	}
?>