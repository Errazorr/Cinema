<?php
session_start();
require_once('user.php');

class methode{
  public function connexion(user $connexion){

    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=?');
    $req->execute(array($connexion->getMail()));
    $donnees= $req->fetch();

    if ($donnees['mail'] == $connexion->getMail() AND $donnees['mdp'] == md5($connexion->getMdp())) {
      $_SESSION['nom'] = $connexion->getNom();
      $_SESSION['mail'] = $connexion->getMail();

      header('Location: ../Index.php');
    }

    else{
      echo '<body onLoad="alert(\'Identifiant ou Mot de passe incorrect\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Connexion.php">';
    }
  }
}
