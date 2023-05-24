<?php
	// aanmeldForm2.php
	// anjo eijeriks
	
	require "Klant.php";
	
	echo "<h1>Aanmeldformulier klant 2</h1>";
	
	// uitlezen array van aanmeldForm1.php
	$klantEmail=$_POST["emailvak"];
	$klantWachtwoord=$_POST["wachtwoordvak"];
	
	// maken object
	$klant1 = new Klant($klantEmail, $klantWachtwoord);
	// zet het object in de database
	$klant1->aanmelden();

	// afdrukken object	
	echo "Deze klant is aangemeld: <br/>";
	$klant1->afdrukkenKlant();
	
	echo '<br/><br/><a href="hoofdmenu.php">Terug naar het hoofdmenu.</a>';
?>

