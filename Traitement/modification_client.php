<?php
// Envoie des données vers les pages suivantes //
require '../Model/user.php';
require '../Manager/Methodes.php';

//COnnexion à la bdd
try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Sélection de la ligne dans la table compte en fonction du nom et prenom
$req = $bdd->prepare('SELECT * FROM compte WHERE nom=? AND prenom=?');
$req->execute(array($_SESSION['nom'], $_SESSION['prenom']));
$donnees= $req->fetch();

//Si les 3 champs ne sont pas vides
if ($_POST['ancien_mdp'] != "" AND $_POST['mdp'] != "" AND $_POST['confirm'] != "") {

  //Si l'ancien mdp et celui dans la bdd sont différents
  if (md5($_POST['ancien_mdp']) != $donnees['mdp']) {
    //Message d'erreur
    echo '<body onLoad="alert(\'Ancien mot de passe incorrect\')">';

    echo '<meta http-equiv="refresh" content="0;URL=../View/modification_client.php">';
  }

  else { //Sinon

    //Si le nouveau mdp et la confirmation sont différents
    if ($_POST['mdp'] != $_POST['confirm']) {
      //MEssage d'erreur
      echo '<body onLoad="alert(\'Les deux mots de passe sont différents\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/modification_client.php">';
    }

    else{//Sinon
      //Instanciation de modification de type user
      $modification = new user(['nom' =>$_POST['nom'],
                                'prenom' =>$_POST['prenom'],
                                'mail' =>$_POST['email'],
                                'tel' =>$_POST['telephone'],
                                'mdp' =>md5($_POST['mdp'])]);
      $modif = new methode; //Instanciation de modif de type méthode
      $modif->modification($modification); //Appel de la méthode modification
    }
  }
}

else {//Sinon
  //Instanciation de modification de type user
  $modification = new user(['nom' =>$_POST['nom'],
                            'prenom' =>$_POST['prenom'],
                            'mail' =>$_POST['email'],
                            'tel' =>$_POST['telephone'],
                            'mdp' =>$donnees['mdp']]);
  $modif = new methode; //Instanciation de modif de type méthode
  $modif->modification($modification);

}

?>
