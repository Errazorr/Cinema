<?php
//Envoie des données vers les pages suivantes //
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');
//enregsitrement des données //
$commentaires = new reservation(['nom' =>$_SESSION['nom'],
                                'film' =>$_POST['film'],
                                'commentaire' =>$_POST['commentaire']]);
$commenter = new methode; //Déclartion d'une nouvelle methode //
$commenter->commentaires($commentaires);

?>
