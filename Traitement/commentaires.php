<?php
require_once('../Manager/Methodes.php');
require_once('../Model/Reservation.php');

$commentaires = new reservation(['nom' =>$_SESSION['nom'],
                                'film' =>$_POST['film'],
                                'commentaire' =>$_POST['commentaire']]);
$commenter = new methode;
$commenter->commentaires($commentaires);

?>
