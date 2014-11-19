<?php

	$jaartal = '2013';
	$jaarType = 'Dit bestaat niet';

	//We moeten een restwaarde 0 hebben

	if ( ( ( $jaartal % 4 == 0 ) && ( $jaartal % 100 != 0 ) ) || ( $jaartal % 400 == 0 ) )
	{
		$jaarType = 'een schrikkeljaar';
	}

	else
	{
		$jaarType = 'geen schrikkeljaar';
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht If Else: deel 1</title>
</head>
</head>
<body>

	<section>

		<h1>Opdracht If Else: deel 1</h1>

		<p>Vandaag is het dag <?= $jaartal ?>, Het is dus <?= $jaarType ?></p>

	</section>

</body>
</html>