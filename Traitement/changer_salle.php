<?php
//Envoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Enregistrement des données //
$changer_salle = new reservation(['film' =>$_POST['film'],
                                'num_salle' =>$_POST['salle']]);
$changer = new methode; //Déclaration d'une nouvelle methode //
$changer->changer_salle($changer_salle);

?>
