<?php
	$wachtwoord="GeheimVanAnjo!$1959";
	$wachtwoordHash= password_hash($wachtwoord, PASSWORD_DEFAULT);
	echo $wachtwoord ."<br/>";
	echo $wachtwoordHash ."<br/>";
?>
