<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$ajout = new reservation(['film' =>$_POST['film'],
                                'description' =>$_POST['description'],
                                'dimension' => $_POST['3d'],
                                'num_salle' => $_POST['salle'],
                                'places' =>$_POST['places']]);
$ajouter = new methode;
$ajouter->commentaires($ajout);

?>
