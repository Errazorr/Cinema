<?php
// Envoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Enregistrement des données //
$suppr_client = new user(['nom' =>$_POST['nom'],
                          'prenom' =>$_POST['prenom']]);

$supprimer_client = new methode; //Déclration d'une nouvelle methode //
$supprimer_client->suppr_client($suppr_client);

?>
