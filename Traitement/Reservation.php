<?php
// Envoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

//Enregistrement des données //
$reservation = new reservation(['nom' =>$_SESSION['nom'],
                                'tel' =>$_SESSION['tel'],
                                'film' =>$_POST['film'],
                                'date' =>$_POST['date'],
                                'adulte' =>$_POST['adulte'],
                                'ado' =>$_POST['ado'],
                                'enfant' =>$_POST['enfant'],]);
$reserver = new methode; //Déclration d'ne nouvelle methode //
$reserver->reservation($reservation);

?>
