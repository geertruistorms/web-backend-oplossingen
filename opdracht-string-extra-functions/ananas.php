<?php
	
	$fruit= "ananas";

	$strLength = strlen( "$fruit" );

	$substring = "a";
	$strrPos = strrpos( $fruit, $substring );
	$uppercase = strtoupper($fruit);
	/*Laatste positie is strr!!!*/
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

		<p>De positie van de laatste 'a' is <?= $strrPos ?></p>
		<p><?= $uppercase?></p>
	</section>

</body>
</html>
