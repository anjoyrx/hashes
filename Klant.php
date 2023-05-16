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
			require "connect.php";
			// gegevens uit het object in variabelen zetten
			$klantEmail=$this->getKlantEmail();
			$klantWachtwoord=$this->getKlantWachtwoord();
			$wachtwoordHash= password_hash($klantWachtwoord, PASSWORD_DEFAULT);
			$sql = $conn->prepare 
				("
					select count(*) from klanten
					where klantemail=:klantemail 
						and klantwachtwoord=:klantwachtwoord
				");

			// variabelen in de statement zetten
			$sql->bindParam(":klantemail", $klantEmail);
			echo $klantEmail;

			$sql->bindParam(":klantwachtwoord", $wachtwoordHash);
			echo $wachtwoordHash;
			$sql->execute();
			foreach($sql as $klant)
				{
					// gegevens uit de array in het object stoppen
					// en gelijk afdrukken
					echo implode($klant);
					
				}
			// melding geven
			echo "dit is inloggen<br/>";
			
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
					echo $this->klantEmail=$klant["klantemail"]. " - ";
					echo $this->klantWachtwoord=$klant["klantwachtwoord"]. "<br/>";
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
