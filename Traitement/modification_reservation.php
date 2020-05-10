<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$modif_reservation = new reservation(['reservation' =>$_POST['reservation'],
                                      'film' =>$_POST['film'],
                                      'date' =>$_POST['date']]);
$modif_reserver = new methode;
$modif_reserver->modif_reservation($modif_reservation);

?>
