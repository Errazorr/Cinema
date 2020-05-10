<?php
// Envoie des données vers les pages suivantes //
require '../Model/user.php';
require '../Manager/Methodes.php';

try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}


$req = $bdd->prepare('SELECT * FROM compte WHERE nom=? AND prenom=?');
$req->execute(array($_SESSION['nom'], $_SESSION['prenom']));
$donnees= $req->fetch();

if ($_POST['ancien_mdp'] != "" AND $_POST['mdp'] != "" AND $_POST['confirm'] != "") {

  if (md5($_POST['ancien_mdp']) != $donnees['mdp']) {
    echo '<body onLoad="alert(\'Ancien mot de passe incorrect\')">';

    echo '<meta http-equiv="refresh" content="0;URL=../View/modification_client.php">';
  }

  else {

    if ($_POST['mdp'] != $_POST['confirm']) {
      echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/modification_client.php">';
    }

    else{
      $modification = new user(['mail' =>$_POST['email'],
                                'tel' =>$_POST['telephone'],
                                'mdp' =>md5($_POST['mdp'])]);
      $modif = new methode;
      $modif->modification($modification);
    }
  }
}

else {
  $modification = new user(['mail' =>$_POST['email'],
                            'tel' =>$_POST['telephone'],
                            'mdp' =>$donnees['mdp']]);
  $modif = new methode;
  $modif->modification($modification);

}

?>
