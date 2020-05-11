<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Instanciation de ajout de type réservation
$ajout = new reservation(['film' =>$_POST['film'],
                                'description' =>$_POST['description'],
                                'dimension' => $_POST['3d'],
                                'num_salle' => $_POST['salle'],
                                'places' =>$_POST['places']]);
//Instanciation de ajouter de type methode
$ajouter = new methode;
//appel de la méthode ajout_film
$ajouter->ajout_film($ajout);

?>
