<?php
	// Klant
	// Anjo Eijeriks
		class Klant
		{
		// variabelen
		protected $klantEmail;
		protected $klantWachtwoord;
		
		// methoden
		// constructor
		public function __construct($klantEmail=NULL, $klantWachtwoord=NULL)
		{
			$this->klantEmail=$klantEmail;
			$this->klantWachtwoord=$klantWachtwoord;
		}
		// setters (nu nog niet nodig)
		// getters
		public function getKlantEmail()
		{
			return $this->klantEmail;
		}
		public function getKlantWachtwoord()
		{
			return $this->klantWachtwoord;
		}
		
		// aanmelden()   createKlant
		public function aanmelden()
		{
			require "connect.php";
			// gegevens uit het object in variabelen zetten
			$klantEmail=$this->getKlantEmail();
			$klantWachtwoord=$this->getKlantWachtwoord();
			$wachtwoordHash= password_hash($klantWachtwoord, PASSWORD_DEFAULT);
			$sql = $conn->prepare
				("
					insert into klanten values
					(:klantemail, :klantwachtwoord)
				");
			// variabelen in de statement zetten
			$sql->bindParam(":klantemail", $klantEmail);
			$sql->bindParam(":klantwachtwoord", $wachtwoordHash);
			$sql->execute();
			// melding geven
			echo "De klant is in de database gezet.<br/>";
		}
		
		// inloggen()    searchKlant
		public function inloggen()
		{
			// properties uit object in variabelen zetten
			$klantEmail=$this->klantEmail;
			$ingevoerdeWachtwoord=$this->klantWachtwoord;
			// verbinding met de database maken
			require "connect.php";
			// sql-statement klaarzetten
			$sql = $conn->prepare
				("
					select * from klanten
					where klantEmail=:klantEmail;
				");
			// gegevens uit de variabelen in de placeholder zetten
			$sql->bindParam(":klantEmail", $klantEmail);	
			// sql-statement uitvoeren
			$sql->execute();
			foreach($sql as $klant)
				{
					// controleren of de hash klopt
					if(password_verify($ingevoerdeWachtwoord, $klant["klantWachtwoord"])) 
					{echo "goed ingelogd<br/>";}
					else
					{echo "Niet ingelogd, de gegevens kloppen niet!<br/>";}
				}			
		}
		// alleKlanten() readKlant
		public function alleKlanten()
		{
			require "connect.php";
			$sql = $conn->prepare
				("
					select * from klanten
				");
			$sql->execute();
			foreach($sql as $klant)
				{
					// gegevens uit de array in het object stoppen
					// en gelijk afdrukken
					echo $this->klantEmail=$klant["klantEmail"]. " - ";
					echo $this->klantWachtwoord=$klant["klantWachtwoord"]. "<br/>";
				}
		}

		public function afdrukkenKlant()
		{
			echo $this->getKlantEmail();
			echo "<br/>";
			echo $this->getKlantWachtwoord();
		}
	}
?>
