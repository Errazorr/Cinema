<?php
session_start();
require_once '../Manager/Methodes.php';
require_once '../Model/Reservation.php';

$reservation = new reservation(['nom' =>$_SESSION['nom'],
                                'tel' =>$_SESSION['tel'],
                                'film' =>$_POST['film'],
                                'date' =>$_POST['date'],
                                'adulte' =>$_POST['adulte'],
                                'ado' =>$_POST['ado'],
                                'enfant' =>$_POST['enfant'],]);
$reserver = new methode;
$reserver->reservation($reservation);

?>
