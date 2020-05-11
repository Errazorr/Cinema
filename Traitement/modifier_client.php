<?php
//Evoie des données vers les pages suivantes //
require '../Model/user.php';
require '../Manager/Methodes.php';

//Enregistrement des données //
$modification_client = new user(['nom' =>$_POST['nom'],
                        'prenom' =>$_POST['prenom'],
                        'mail' =>$_POST['email'],
                        'tel' =>$_POST['telephone']]);
$modif_client = new methode;//Déclration d'une nouvelle methode //
$modif_client->modif_client($modification_client);



?>
