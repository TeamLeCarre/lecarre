<?php
	echo "<select dir='rtl' class='carre--input' name='jour' style='width: 20%'>";
	for ($i = 1; $i < 32; $i++)
	{
		echo "<option value='".$i."'>".$i."</option>";
	}
	echo "</select>";

	echo "<select dir='rtl' class='carre--input' name='mois' style='width: 40%'>";
	echo "<option value='1'>Janvier</option>";
	echo "<option value='2'>Février</option>";
	echo "<option value='3'>Mars</option>";
	echo "<option value='4'>Avril</option>";
	echo "<option value='5'>Mai</option>";
	echo "<option value='6'>Juin</option>";
	echo "<option value='7'>Juillet</option>";
	echo "<option value='8'>Août</option>";
	echo "<option value='9'>Septembre</option>";
	echo "<option value='10'>Octobre</option>";
	echo "<option value='11'>Novembre</option>";
	echo "<option value='12'>Décembre</option>";
	echo "</select>";
	
	echo "<select dir='rtl' class='carre--input' name='annee' style='width: 35%'>";
	for ($i = 1950; $i < 2003; $i++)
	{
		echo "<option value='".$i."'";
		if ($i == 1998)
		{
			echo "selected";
		}
		echo ">".$i."</option>";
	}
	echo "</select>";
?>