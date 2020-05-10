<?php
//Envoie des données vers les pages suivantes //
require '../Model/user.php';
require '../Manager/Methodes.php';

//Si le mot de passe n'est pas le même alors on affiche une erreur //
if ($_POST['mdp'] != $_POST['confirm']) {
  echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

  echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
}

else{
  // Sinon on enregistre les données //
  $admin = new user(['nom' =>$_POST['nom'],
                     'prenom' =>$_POST['prenom'],
                     'mail' =>$_POST['email'],
                     'tel' =>$_POST['telephone'],
                     'mdp' =>$_POST['mdp']]);
  $ajout_admin = new methode; //Déclaration d'une nouvelle methode //
  $ajout_admin->ajouter_admin($admin);
}


?>
