<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$changer_salle = new reservation(['film' =>$_POST['film'],
                                'num_salle' =>$_POST['salle']]);
$changer = new methode;
$changer->changer_salle($changer_salle);

?>
