<?php
	// alleKlanten.php
	// Anjo Eijeriks
	
	echo '<h1>Alle klanten</h1>';

        require "Klant.php";			// nodig om object te maken
			$klant1 = new Klant();
			$klant1->alleKlanten();
    echo '<br/><br/><a href="hoofdmenu.php">Terug naar het hoofdmenu.</a>';
?>


