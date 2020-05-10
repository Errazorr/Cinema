<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$suppr_reservation = new reservation(['reservation' =>$_POST['reservation']]);

$suppr_reserver = new methode;
$suppr_reserver->suppr_reservation($suppr_reservation);

?>
