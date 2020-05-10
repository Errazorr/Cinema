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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

   <style type="text/css">

          #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
              height:400px;
          }
      </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
    <div id="map">
      <!-- Ici s'affichera la carte -->
      </div>
    <!-- Liens contenat le script de la carte  -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    <script type="text/javascript">
              // On initialise la latitude et la longitude de Paris (centre de la carte)
              var lat = 48.852969;
              var lon = 2.349903;
              var macarte = null;
              // Fonction d'initialisation de la carte
              function initMap() {
                  // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                  macarte = L.map('map').setView([lat, lon], 11);
                  // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                  L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                      // Il est toujours bien de laisser le lien vers la source des données
                      attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                      minZoom: 1,
                      maxZoom: 20
                  }).addTo(macarte);
              }
              window.onload = function(){
      // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé

      initMap();
      var marker = L.marker([48.86377, 2.33205]).addTo(macarte);
              };
          </script>
  </div>
  <!-- Fin de la carte  -->

    <!-- Affichage du formulaire de contact -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-text">
                        <h4>Nous rejoindre !</h4>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-location-pin"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Localisation</span>
                                       Rue de Rivoli, 75001 Paris
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-mobile"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Telephone</span>
                                        +33 07 00 00 00 00
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-email"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Mail</span>
                                        Palais_du_cinema@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-option">
                        <h4>Nous contacter !</h4>
                        <form action="../Manager/Contact.php" method="post" class="comment-form contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="nom" placeholder="nom">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="mail" placeholder="mail">
                                </div>
                                <div class="col-lg-12">
                                      <input type="text" name="message" placeholder="message">
                                    <button type="submit" class="site-btn">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin du formumlaire -->

    <!-- Début du pied de page -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="../img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Adresse: Rue de Rivoli, 75001 Paris</li>
                            <li>Phone: +33 07 00 00 00 00</li>
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
                        <h5>informations</h5>
                        <ul>
                            <li><a href="reservation.php">Reservation</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="Connexion.php">Connexion</a></li>
                            <li><a href="Nouveaute.php">Nouveauté</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Rejoinez la newsletter</h5>
                        <p>Vous devez être inscrit pour pouvoir vous inscrire à la newsletter.</p>
                        <form method="post" action="../Manager/newsletter.php" class="news-form">
                            <input type="text" name="mail" placeholder="Enter votre email">
                            <button type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <img src="../img/instagram/instagram-1.jpg" alt="">
                            <img src="../img/instagram/instagram-2.jpg" alt="">
                            <img src="../img/instagram/instagram-3.jpg" alt="">
                            <img src="../img/instagram/instagram-4.jpg" alt="">
                            <img src="../img/instagram/instagram-5.jpg" alt="">
                            <img src="../img/instagram/instagram-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright-text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
</p></div>
        </div>
    </section>
    <!-- Fin du pied de page -->

    <!-- Lien contetant le script -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
