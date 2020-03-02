<?php

require '../Model/User.php';
require '../Model/Connexion.php';
session_start();

if (is_null($_POST['id'] OR is_null($_POST['mdp']))){
  echo '<body onLoad="alert(\'Veuillez remplir les zones vides\')">';
}

else{

  $connexion = new user(['mail' =>$_POST['mail'],
                        'mdp' =>$_POST['mdp']]);
  $connect = new methode;
  $connect->connexion($connexion);

}

?>
