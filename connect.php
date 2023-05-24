<?php
	// connect.php
	// maakt verbinding met de database 'inlog'
	// Anjo Eijeriks
	
	$servername = "localhost";
	$dbname		= "inlog";
	$username	= "root";
	$password	= "";
	
	try
	{
		$conn = new PDO(
							"mysql:host=$servername; 
							dbname=$dbname",
							$username, $password
						);
		// echo "Connectie gelukt <br/>";
	}
	catch(PDOExeption $e)
	{
		echo "Connectie mislukt <br/>".$e->getMessage();
	}
?>

