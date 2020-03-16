<?php

require '../Model/user.php';
require '../Manager/Methodes.php';
session_start();

if ($_POST['mdp'] != $_POST['confirm']) {
  echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

  echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
}

else{
  $inscription = new user(['nom' =>$_POST['nom'],
                                  'prenom' =>$_POST['prenom'],
                                  'id' =>$_POST['id'],
                                  'mail' =>$_POST['mail'],
                                  'tel' =>$_POST['tel'],
                                  'mdp' =>$_POST['mdp']]);
  $inscrit = new methode;
  $inscrit->inscription($inscription);
}


?>
