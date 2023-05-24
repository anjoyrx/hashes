<?php
	// inlogForm2.php
	// Anjo Eijeriks
	
    require "Klant.php";
	echo '<h1>Inlogformulier 2</h1>';
    
    // uitlezen array van inlogForm1.php
	$klantEmail=$_POST["emailvak"];
	$klantWachtwoord=$_POST["wachtwoordvak"];
	
	// maken object
	$klant1 = new Klant($klantEmail, $klantWachtwoord);
    $klant1->inloggen();
		            
    echo '<br/><br/><a href="hoofdmenu.php">Terug naar het hoofdmenu.</a>';
?>

