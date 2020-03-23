<?php
session_start();
require '../Model/Reservation.php';
require '../Manager/Methodes.php';

if ($_POST['mdp'] != $_POST['confirm']) {
  echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

  echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
}

else{
  $reservation = new reservation(['nom' =>$_SESSION['nom'],
                                  'tel' =>$_POST['telephone'],
                                  'film' =>$_POST['film'],
                                  'date' =>$_POST['date'],
                                  'adulte' =>$_POST['adulte'],
                                  'ado' =>$_POST['ado'],
                                  'enfant' =>$_POST['enfant'],]);
  $reserver = new methode;
  $reserver->reservation($reservation);
}


?>
