<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
//test de connexion a la bdd //
try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('SELECT role FROM compte WHERE mail=?');
// Sélection du role //
$role= $req->fetch();
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nous contacter</title>



    <!-- Liens contenant le styles de la page -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">


    <!-- Affichage de la navbar  -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="#">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                      <ul>
                        <!-- Changement dz la navbar en focntion du role  -->
                        <?php
                        if (isset($_SESSION['mail'])){
                          if ($role == "client") { ?>
                            <li class="active"><a href="../index.php">Accueil</a></li>
                            <li><a href="Nouveaute.php">Film & évènement</a>
                                <ul class="dropdown">
                                    <li><a href="Nouveaute.php">Nouveauté</a></li>
                                    <li><a href="Prochainement.php">Prochainement</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="compte_client.php">Mon compte</a></li>
                            <li><a href="../Traitement/session_destroy.php">Déconnexion</a></li>
                          <?php  }

                           else { ?>
                            <li class="active"><a href="../index.php">Accueil</a></li>
                            <li><a href="reservation.php">Réservation</a></li>
                            <li><a href="Nouveaute.php">Film & évènement</a>
                                <ul class="dropdown">
                                    <li><a href="Nouveaute.php">Nouveauté</a></li>
                                    <li><a href="Prochainement.php">Prochainement</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="compte_admin.php">Mon compte</a></li>
                            <li><a href="../Traitement/session_destroy.php">Déconnexion</a></li>
                        <?php }
                      }
                      else{ ?>
                          <li class="active"><a href="../index.php">Accueil</a></li>
                          <li><a href="Nouveaute.php">Film & évènement</a>
                              <ul class="dropdown">
                                  <li><a href="Nouveaute.php">Nouveauté</a></li>
                                  <li><a href="Prochainement.php">Prochainement</a></li>
                              </ul>
                          </li>
                          <li><a href="contact.php">Contact</a></li>
                          <li><a href="Connexion.php">Connexion</a></li>

                        <?php	}  ?>

                      </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Fin de la navbar -->
        <section class="portfolio-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
<div id="paypal-button-container"></div>
<!-- Formulaire de paiement -->
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'checkout',

      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '30'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>
</div>
</div>
</div>
</div>
</section>
<!-- Fin du formulaire -->
<!-- Affichage du pied de page  -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-option">
                    <div class="fo-logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Adresse: Rue de Rivoli, 75001 Paris</li>
                        <li>Phone: +33 7 00 00 00 00</li>
                        <li>Email: Palais_du_cinema@gmail.com</li>
                    </ul>
                    <div class="fo-social">
                        <a href="https://fr-fr.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/?hl=fr"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/login?lang=fr"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.pinterest.fr/"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget fw-links">
                    <h5>Informations</h5>
                    <ul>

                      <?php
                      if (isset($_SESSION['mail'])){
                        if ($_SESSION['role'] == "client") { ?>
                          <li><a href="View/reservation.php">Reservation</a></li>
                          <li><a href="View/contact.php">Contact</a></li>
                          <li><a href="../session_destroy.php">Déconnexion</a></li>
                          <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                        <?php  }

                         else { ?>
                           <li><a href="View/voir_reservation.php">Reservations</a></li>
                           <li><a href="View/contact.php">Contact</a></li>
                           <li><a href="../session_destroy.php">Déconnexion</a></li>
                           <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                      <?php }
                    }
                    else{ ?>
                      <li><a href="View/contact.php">Contact</a></li>
                      <li><a href="View/Connexion.php">Connexion</a></li>
                      <li><a href="View/Nouveaute.php">Nouveauté</a></li>

                      <?php	}  ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Rejoinez la newsletter</h5>
                    <p>Vous devez être inscrit pour pouvoir vous inscrire à la newsletter.</p>
                    <form method="post" action="Manager/newsletter.php" class="news-form">
                        <input type="text" name="mail" placeholder="Enter votre email">
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Instagram</h5>
                    <div class="insta-pic">
                        <img src="img/instagram/instagram-1.jpg" alt="">
                        <img src="img/instagram/instagram-2.jpg" alt="">
                        <img src="img/instagram/instagram-3.jpg" alt="">
                        <img src="img/instagram/instagram-4.jpg" alt="">
                        <img src="img/instagram/instagram-5.jpg" alt="">
                        <img src="img/instagram/instagram-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text"><p><!-- Copyright -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
    </div>
</section>
<!-- Fin du pied de page  -->

<!-- Liens conteant le script de la page  -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
