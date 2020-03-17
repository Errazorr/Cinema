<?php

require '../Model/user.php';
require '../Manager/Methodes.php';

if ($_POST['mdp'] != $_POST['confirm']) {
  echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

  echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
}

else{
  $inscription = new user(['nom' =>$_POST['nom'],
                                  'prenom' =>$_POST['prenom'],
                                  'mail' =>$_POST['email'],
                                  'tel' =>$_POST['telephone'],
                                  'mdp' =>$_POST['mdp']]);
  $inscrit = new methode;
  $inscrit->inscription($inscription);
}


?>
