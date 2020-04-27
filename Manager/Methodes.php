<?php
session_start();
require_once('../Model/User.php');

// utilisation de service //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//

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
      $_SESSION['nom'] = $donnees['nom'];
      $_SESSION['tel'] = $donnees['tel'];
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
}

$mail = new PHPMailer();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
$mail->Password   = 'Yanish93210';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom('yanishverif@gmail.com', 'Inscription');
$mail->addAddress($inscription->getmail(), 'Inscription');     // Add a recipient //Recipients
 $mail->Body    =   'Bonjour et bienvenue au palais du cinéma, merci de nous faire confiance';
if(!$mail->Send()) {
  echo '<body onLoad="alert(\'Erreur\')">';
echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
} else {
   header("location: ../index.php");
}
    }



  public function reservation(reservation $reservation){
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }

    $req = $bdd->prepare('SELECT * FROM compte WHERE nom=?');
    $req->execute(array($_SESSION['nom']));
    $donnees= $req->fetch();

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

      if ($nb_pers == 0) {
        echo '<body onLoad="alert(\'Entrez le nombre de personnes à aller voir ce film\')">';

        echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
      }

      else {
        $requ = $bdd->prepare('SELECT places_restantes FROM salle WHERE film=?');
        $requ->execute(array($reservation->getFilm()));
        $places_rest= $requ->fetch(); //Nb de places restantes en fonction du film choisi pendant la réservation

        if ($places_rest >= $nb_pers) {
          $req = $bdd->prepare('INSERT INTO reservation (nom, tel, num_salle, prix, nb_pers, date_prevue) VALUES (?,?,?,?,?,?)');
          $a = $req->execute(array($_SESSION['nom'], $_SESSION['tel'], $salle, $prix, $nb_pers, $reservation->getDate()));
          $_SESSION['prix'] = $prix;

          $places_rest = (int)$places_rest['places_restantes'] - $nb_pers;
          $rec = $bdd->prepare('UPDATE salle SET places_restantes=? WHERE film=?');
          $a = $rec->execute(array($places_rest, $reservation->getFilm()));
          header('Location: ../Index.php');
        }

        else {
          echo '<body onLoad="alert(\'Pas assez de place pour autant de personnes\')">';

          echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
        }
      }


  }
}
