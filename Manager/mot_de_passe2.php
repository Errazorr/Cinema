<?php
//Récupération des données //
$mail= $_POST['mail'];
$mdp=md5($_POST['mdp']);
// envoie les données vers les page suiavntes //
require '../Model/recuperation_mdp.php';
require '../Traitement/recuperation_mdp.php';
class Manager{
public function mot_de_passe_oublie($donne){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    $req = $bdd->prepare('UPDATE compte set mdp = :mdp WHERE mail = :mail');
    $a = $req->execute(array('mdp'=>md5($donne->getmdp()), 'mail'=>$donne->getmail()));

    if ($a == true){// Si la requete s'execute alors on redirige vers une autre page//
      header("location: ../index.php");
    }
    else { // Si la requete ne s'execute pas alors on redirige vers une autre page//
			echo '<body onLoad="alert(\'Erreur\')">';
    }
  }
}
?>
