<?php
//utilisation des services suivant //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Récuperation des données sur les pages suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//
 $mail=$_POST['mail'];
//Verifie la présence de l'adresse mail pour par la suite envoyer le mail //
 $bdd=new PDO('mysql:host=localhost;dbname=cine;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from compte where mail = :mail');
    $req->execute(array('mail'=>$mail));
    $connexion = $req->fetch();

    // Envoie des données à l'adresse mail //
    $mail = new PHPMailer();
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
    $mail->Password   = 'Yanish93210';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('yanishverif@gmail.com', 'Newsletter');
    $mail->addAddress($mail, 'Contact');     // Add a recipient //Recipients
     $mail->Body    =   'Merci de vous etre inscrit a la Newsletter vous aurait accées à toute les nouveautés nous concernant';
$mail->send();

// Si l'envoie de mail s'effectue alors on redirige vers une page //
    if ($connexion == true){
      header("location: ../index.php");
    }
    else{ // Si l'envoie de mail ne s'effectue pas alors on affiche une erreur //
      echo '<body onLoad="alert(\'Mail ou Mot de passe incorrect\')">';
  echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
    }
?>
