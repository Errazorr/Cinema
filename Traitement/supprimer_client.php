<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$suppr_client = new user(['nom' =>$_POST['nom'],
                          'prenom' =>$_POST['prenom']]);

$supprimer_client = new methode;
$supprimer_client->suppr_client($suppr_client);

?>
