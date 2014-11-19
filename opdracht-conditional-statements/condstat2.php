<?php
	$getal = 1;
	$status = 'onbekende dag';
	
	$a = 'a';

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


if ( $getal >= 1 && $getal <= 7 )
		{
			$status = strtoupper ( $status ); 
		}
		//Onderaan zetten want anders continu herhalen -> het enige nadeel is: 'deze dag bestaat niet' w ook in hoofdletters geprint -> zien of if werkt
	//Probeer zo weinig mogelijk herhaling te voorkomen

	//Dit laatste is uit de oplossing gehaald en heb ik dus niet zelf gevonden
	$dagHoofdletterUit   	=   strrpos( $status, 'A' );
    $status 	   			=	substr_replace( $status, 'a', $dagHoofdletterUit, 1 );

    /*	$dagHoofdletterUit  = str_replace ('A', 'a', $status);
		$laatsteCharPos 		= strrpos ($status, 'A');
		$dagLaatsteHoofdletterUit	= substr_resplace ($dag, 'a', $laatsteCharPos, 1);
	*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht Conditional Statements: deel 2</title>
</head>
</head>
<body>

	<section>

		<h1>Dagen van de week</h1>

		<p>Vandaag is het dag <?= $getal ?>, Het is dus <?= $status ?></p>
		<p>Vandaag is het dag <?= $getal ?>, Het is dus <?= $dagHoofdletterUit ?></p>


	</section>

</body>
</html>