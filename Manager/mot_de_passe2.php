<?php
$mail= $_POST['mail'];
$mdp=md5($_POST['mdp']);
// envoie les données vers les page suiavntes //
require '../Model/recuperation_mdp.php';
require '../Traitement/recuperation_mdp.php';
class Manager{
public function mot_de_passe_oublie($donne){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    $req=$bdd->prepare('UPDATE compte set mdp = :mdp WHERE email = :email');
    $req->execute(array('mdp'=>$donne->getmdp(), 'mail'=>$donne->getmail()));
		//$a = $req->fetchall();
		if ($req == true){
      header("location: ../index.php");
    }
    else{
			echo '<body onLoad="alert(\'Erreur\')">';
    }
  }
}
?>
