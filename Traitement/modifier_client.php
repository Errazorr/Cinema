<?php

require '../Model/user.php';
require '../Manager/Methodes.php';

$modification_client = new user(['nom' =>$_POST['nom'],
                        'prenom' =>$_POST['prenom'],
                        'mail' =>$_POST['email'],
                        'tel' =>$_POST['telephone']]);
$modif_client = new methode;
$modif_client->modif_client($modification_client);



?>
