<?php
//envoie des données vers les pages suivantes //
require '../Model/User.php';
require '../Manager/Methodes.php';

if (is_null($_POST['mail'] OR is_null($_POST['mdp']))){
  echo '<body onLoad="alert(\'Veuillez remplir les zones vides\')">';
}

else{
  //Enregistrement des données //
  $connexion = new user(['mail' =>$_POST['mail'],
                        'mdp' =>$_POST['mdp']]);
  $connect = new methode; //Déclaration d'une nouvelle methode //
  $connect->connexion($connexion);

}

?>
