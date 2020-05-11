<?php
// Envoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Enregistrement des données //
$suppr_reservation = new reservation(['reservation' =>$_POST['reservation']]);

$suppr_reserver = new methode;//Déclration d'une nouvelle methode //
$suppr_reserver->suppr_reservation($suppr_reservation);

?>
