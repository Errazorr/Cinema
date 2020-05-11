<?php
//Evoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Enregistrement des données //
$modif_reservation = new reservation(['reservation' =>$_POST['reservation'],
                                      'film' =>$_POST['film'],
                                      'date' =>$_POST['date']]);
$modif_reserver = new methode; //Déclration d'une nouvelle methode //
$modif_reserver->modif_reservation($modif_reservation);

?>
