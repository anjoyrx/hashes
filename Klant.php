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
		public function __construct($klantEmail, $klantWachtwoord)
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
		
		// alleKlanten() readKlant
	}
?>
