<?php
	
	$naam = "Geertrui";
	$voornaam ="Storms";
	$volledigeNaam =$naam . " " . $voornaam;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oef concatenator</title>
</head>
<body class="web-backend-inleiding">
	<section class="body">
			
			<h1>Dit is de website van <?= $volledigeNaam ?></h1>
			<p>Hallo mijn naam is <?= $volledigeNaam ?></p>
			<p>Hallo <?= $voornaam ?></p>

	</section>

</body>
</html>
