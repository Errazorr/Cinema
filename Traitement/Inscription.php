<?php
//Envoie des données vers les pages suivantes //
require '../Model/user.php';
require '../Manager/Methodes.php';

if ($_POST['mdp'] != $_POST['confirm']) {
  echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

  echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
}

else{
  //Enregistrement des données //
  $inscription = new user(['nom' =>$_POST['nom'],
                                  'prenom' =>$_POST['prenom'],
                                  'mail' =>$_POST['email'],
                                  'tel' =>$_POST['telephone'],
                                  'mdp' =>$_POST['mdp']]);
  $inscrit = new methode; //Déclration d'une nouvelle methode //
  $inscrit->inscription($inscription);
}


?>
