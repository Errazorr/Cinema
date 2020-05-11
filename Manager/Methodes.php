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
    //Test de connexion à la bdd //
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    // Sélectionne les informations de la table compte en fonction de l'adresse mail //
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=?');
    $req->execute(array($connexion->getMail()));
    $donnees= $req->fetch();
    // Si la rêquette s'execute alors on redirige vers la page d'accueil //
    if ($donnees['mail'] == $connexion->getMail() AND $donnees['mdp'] == md5($connexion->getMdp())) {
      $_SESSION['nom'] = $donnees['nom'];
      $_SESSION['tel'] = $donnees['tel'];
      $_SESSION['mail'] = $connexion->getMail();
      $_SESSION['role'] = $donnees['role'];
      header('Location: ../Index.php');
    }

    else{
      // Si non on affiche une erreur et on redirige vers la page connexion//
      echo '<body onLoad="alert(\'Mail ou Mot de passe incorrect\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Connexion.php">';
    }
  }



  public function inscription(user $inscription){
    try{
      //Test de connexion à la bdd //
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    //Sélection des informations en fonction de l'adresse mail
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=?');
    $req->execute(array($inscription->getMail()));
    $donnees= $req->fetch();
    // Affiche une erreur ou effectue une redirection en fonction de l'execution de la rêquette //
    if ($donnees) {
      // Si la personne exsite deja alors on affiche une erreur //
      echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Inscription.php">';
    }

    else {
      //Si non on effectue une insertion //
      $req = $bdd->prepare('INSERT INTO compte (nom, prenom, mail, tel, mdp, role) VALUES (?,?,?,?,?,?)');
      $req->execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getMail(), $inscription->getTel(), md5($inscription->getMdp()), 'client'));
      $_SESSION['nom'] = $inscription->getNom();
      $_SESSION['prenom'] = $inscription->getPrenom();
}
// On envoie un email pour confirmer l'inscription  //
$mail = new PHPMailer();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
$mail->Password   = 'Yanish93210';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to


$mail->setFrom('yanishverif@gmail.com', 'Inscription');
$mail->addAddress($inscription->getmail(), 'Inscription');     // Add a recipient //Recipients
 $mail->Body    =   'Bonjour et bienvenue au palais du cinéma, merci de nous faire confiance';
if(!$mail->Send()) {
  // Si l'envoie de mail ne s'excuté pas alors on affiche une erreur //
  echo '<body onLoad="alert(\'Erreur\')">';
echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
} else {
  // Si l'envoie de mail est excuté alors on redirige vers la page d'accueil //

   header("location: ../index.php");
}
    }



  public function ajouter_admin(user $admin){
    //Test de connexion à la bdd //
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    //Sélectionne les informations de la table compte en fonction de l'eamil //
    $req = $bdd->prepare('SELECT * FROM compte WHERE mail=? AND role="admin"');
    $req->execute(array($admin->getMail()));
    $donnees= $req->fetch();
    //affiche une erreur en fonction de l'execution de la rêquette  //
    if ($donnees) {
      echo '<body onLoad="alert(\'Administrateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/Ajout_admin.php">';
    }

    else {
      $req = $bdd->prepare('INSERT INTO compte (nom, prenom, mail, tel, mdp, role) VALUES (?,?,?,?,?,?)');
      $req->execute(array($admin->getNom(), $admin->getPrenom(), $admin->getMail(), $admin->getTel(), md5($admin->getMdp()), 'admin'));
      $_SESSION['nom'] = $admin->getNom();
      $_SESSION['prenom'] = $admin->getPrenom();
      header('Location: ../Index.php');
    }

  }


  public function reservation(reservation $reservation){
    // Test de connexion à la bdd //
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    // Sélection de l'ensemble des données de la table compte en fonction du nom //
    $req = $bdd->prepare('SELECT * FROM compte WHERE nom=?');
    $req->execute(array($_SESSION['nom']));
    $donnees= $req->fetch();
    //Permet de déterminer les salles pour les films //
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
      //Permet de déterminer le prix //
      $prix = $reservation->getAdulte() * 12 + $reservation->getAdo() * 10 + $reservation->getEnfant() * 8;
      $nb_pers = $reservation->getAdulte() + $reservation->getAdo() + $reservation->getEnfant();
      // Si le nombre de personne est égal à 0 alors on affiche une erreur //
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
          header('Location: ../View/payement.php');
        }

        else {
          echo '<body onLoad="alert(\'Pas assez de place pour autant de personnes\')">';

          echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
        }
      }
  }


  public function changer_salle(reservation $changer_salle){
    // Test de connexion à la bdd //
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    // Sélectionne les informations de la table salle en fonction du numéro //
    $req = $bdd->prepare('SELECT * FROM salle WHERE num=?');
    $req->execute(array($changer_salle->getNum_salle()));
    $donnees= $req->fetch();
  // affiche une  erreur en fonction de l'execution de la requête //
    if ($donnees) {
      echo '<body onLoad="alert(\'Salle déjà prise\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/changer_salle.php">';
    }

    else {
        // Mise à jour du numéro de salle en fonction du film//
      $rec = $bdd->prepare('UPDATE salle SET num=? WHERE film=?');
      $a = $rec->execute(array($changer_salle->getNum_salle(), $changer_salle->getFilm()));
      // Redirection vers une page si la mise à jour s'effectue //
      header('Location: ../View/compte_admin.php');
    }
  }


  public function commentaires($commentaires){
    try{
      // Test de connexion à la bdd //
      $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    //Execution de la requête //
    $rec = $bdd->prepare('INSERT INTO commentaires (nom, film, com) VALUES (?,?,?)');
    $a = $rec->execute(array($_SESSION['nom'], $commentaires->getFilm(), $commentaires->getCommentaire()));
    // Redirection en fonction de l'execution de la requête //
    header('Location: ../View/compte_client.php');

  }
