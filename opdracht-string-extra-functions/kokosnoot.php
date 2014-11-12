<?php
	
	$fruit= "kokosnoot";

	$strLength = strlen( "$fruit" );

	$substring = "o";
	$strPos = strpos( $fruit, $substring );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Opdracht string extra functions</title>
</head>
<body class="web-backend-inleiding">
	<section class="body">
		<p>Kokosnoot bevat <?= $strLength ?> karakters</p>
		<p>De positie van de eerste 'o' is <?= $strPos ?></p>
	</section>

</body>
</html>
