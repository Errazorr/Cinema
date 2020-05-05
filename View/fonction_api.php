<?php
  function construit_url_paypal()
  {
	$api_paypal = 'https://openclassrooms.com/fr/courses/483282-paiement-en-ligne-par-paypal/482633-integration-dans-php#/id/r-482616'; // Site de l'API PayPal. On ajoute déjà le ? afin de concaténer directement les paramètres.
	$version = 57.0; // Version de l'API

	$user = 'yanishverif_api1.gmail.com'; // Utilisateur API
	$pass = 'QSNHLLCT8446WFJ6'; // Mot de passe API
	$signature = 'Az67jetBw42PJZWqdxG9HZqIFcpZAOiSym3HiPHa3gP4IJ0tlMN0pvFv'; // Signature de l'API

	$api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les paramètres

	return 	$api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
  }

  function recup_param_paypal($resultat_paypal)
  {
	$liste_parametres = explode("&",$resultat_paypal); // Crée un tableau de paramètres
	foreach($liste_parametres as $param_paypal) // Pour chaque paramètre
	{
		list($nom, $valeur) = explode("=", $param_paypal); // Sépare le nom et la valeur
		$liste_param_paypal[$nom]=urldecode($valeur); // Crée l'array final
	}
	return $liste_param_paypal; // Retourne l'array
  }
?>
