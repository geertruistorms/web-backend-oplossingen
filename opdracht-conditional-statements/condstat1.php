<?php
	$getal = 3;
	$status = 'deze dag bestaat niet'; //Mocht je dit niet gedaan hebben zou je moeten controleren of het getal niet kleiner dan of groter dan 7 (Probeer eens met getal is 10)

	//Dit noemt if lus
	if ( $getal == 1 ) 
	{
		$status = "maandag";
	}

	if ( $getal == 2 ) 
	{
		$status = "dinsdag";
	}

	if ( $getal == 3 ) 
	{
		$status = "woensdag";
	}

	if ( $getal == 4 ) 
	{
		$status = "donderdag";
	}

	if ( $getal == 5 ) 
	{
		$status = "vrijdag";
	}

	if ( $getal == 6 ) 
	{
		$status = "zaterdag";
	}

	if ( $getal == 7 ) 
	{
		$status = "zondag";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Opdracht Conditional Statements: deel 1</title>
</head>
</head>
<body>

	<section>

		<h1>Dagen van de week</h1>

		<p>Vandaag is het dag <?= $getal ?>, Het is dus <?= $status ?></p>

	</section>

</body>
</html>