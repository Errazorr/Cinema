<?php
require_once('../Model/User.php');

class methode{
  public function connexion(user $connexion){

    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=?');
    $req->execute(array($connexion->getMail()));
    $donnees= $req->fetch();

    if ($donnees['mail'] == $connexion->getMail() AND $donnees['mdp'] == md5($connexion->getMdp())) {
      $_SESSION['nom'] = $connexion->getNom();
      $_SESSION['tel'] = $connexion->getTel();
      $_SESSION['mail'] = $connexion->getMail();
      $_SESSION['role'] = $donnees['role'];
      header('Location: ../Index.php');
    }

    else{
      echo '<body onLoad="alert(\'Mail ou Mot de passe incorrect\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Connexion.php">';
    }
  }



  public function inscription(user $inscription){
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }

    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=?');
    $req->execute(array($inscription->getMail()));
    $donnees= $req->fetch();

    if ($donnees) {
      echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Inscription.php">';
    }

    else {
      $req = $bdd->prepare('INSERT INTO compte (nom, prenom, mail, tel, mdp, role) VALUES (?,?,?,?,?,?)');
      $req->execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getMail(), $inscription->getTel(), md5($inscription->getMdp()), 'client'));
      $_SESSION['nom'] = $inscription->getNom();
      $_SESSION['prenom'] = $inscription->getPrenom();
      header('Location: ../Index.php');
    }

  }


  public function reservation(reservation $reservation){
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }

    $req = $bdd->prepare('SELECT * FROM reservation WHERE nom=?');
    $req->execute(array($reservation->getNom()));
    $donnees= $req->fetch();

    if ($donnees) {
      echo '<body onLoad="alert(\'Une réservation à ce nom a déjà été faite\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
    }

    else {

      if ($reservation->getFilm() == 'L\'appel de la forêt') {
        $salle = 1;
      }
      if ($reservation->getFilm() == 'Sonic le film') {
        $salle = 2;
      }
      if ($reservation->getFilm() == 'De Gaulle') {
        $salle = 3;
      }
      if ($reservation->getFilm() == 'En Avant Disney') {
        $salle = 4;
      }

      $prix = $reservation->getAdulte() * 12 + $reservation->getAdo() * 10 + $reservation->getEnfant() * 8;
      $nb_pers = $reservation->getAdulte() + $reservation->getAdo() + $reservation->getEnfant();

      $req = $bdd->prepare('INSERT INTO reservation (nom, tel, num_salle, prix, nb_pers) VALUES (?,?,?,?,?)');
      $req->execute(array($reservation->getNom(), $_SESSION['tel'], $salle, $prix, $nb_pers));
      $_SESSION['nom'] = $reservation->getNom();
      $_SESSION['prenom'] = $reservation->getPrenom();
      $_SESSION['prix'] = $prix;
      //header('Location: ../Index.php');
    }
  }
}
