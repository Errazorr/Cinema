<?php
$mail= $_POST['mail'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//

// envoie les données vers les page suiavntes //
require '../Model/mot_de_passe.php';
require '../Traitement/passe.php';
class Manager{
public function mot_de_passe($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
    $req=$bdd->prepare('SELECT * FROM compte WHERE mail=:mail');
    $req->execute(array('mail'=>$donnee->getmail()));

  }

  public function Mail($donnee){
  $mail = new PHPMailer();
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
  $mail->Password   = 'Yanish93210';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('yanishverif@gmail.com', 'Mot de passe');
  $mail->addAddress($donnee->getmail(), 'Mot de passe');     // Add a recipient //Recipients
   $mail->Body    = "<a href='http://localhost/GitHub/Cinema/view/recuperation_mdp.php'>Réinitialiser mot de passe</a>";
;
  if(!$mail->Send()) {
    echo '<body onLoad="alert(\'Erreur\')">';
  echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
  } else {
     header("location: ../index.php");
  }

      }
}
 ?>
