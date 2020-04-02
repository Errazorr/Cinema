<?php
session_start();
$mail= $_POST['mail'];
$_SESSION['mail']=$_POST['mail'];
try {
  $bdd = new PDO('mysql:host=localhost;dbname=cine;charset=utf8','root','');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM compte WHERE mail=:mail');
$req->execute(array('mail'=>$mail));
$connexion = $req->fetch();
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require '../vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP(true);                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iliasverif@gmail.com';                     // SMTP username
    $mail->Password   = 'Tamere95';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('yanishverif@gmail.com', 'Yanish');
    $mail->addAddress($mail);     // Add a recipient
if(isset($connexion)){
  if(isset($mail)){
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Modification de mot de passe';
    $mail->Body    = "<a href='http://localhost/cinema/View/récuperation_mdp.php'>Réinitialiser mot de passe</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail client';
    $mail->send();
    header("location: ../index.php");

}
}
else{
  header("Location: ../vu/mot_de_passe_oublie.php");
}
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>
