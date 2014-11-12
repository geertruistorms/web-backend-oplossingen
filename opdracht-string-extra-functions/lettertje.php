<?php
	
	$lettertje="e";
	$cijfertje="3";
	$langstewoord="zandzeepsodemineralenwatersteenstralen";
	$replacedLangsteWoord = str_replace($lettertje, $cijfertje, $langstewoord)
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

		<p><?= $langstewoord ?> wordt vervangen door <?= $replacedLangsteWoord ?></p>
	</section>

</body>
</html>
