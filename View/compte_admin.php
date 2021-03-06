<!DOCTYPE html>
<html lang="zxx">

<?php
session_start();
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palais du cinéma</title>

    <!-- Logo -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Liens contenant le Styles de la page -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Affichage de la navbar -->
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
                        <li class="active"><a href="../index.php">Accueil</a></li>
                        <li><a href="Nouveaute.php">Film & évènement</a>
                          <ul class="dropdown">
                            <li><a href="Nouveaute.php">Nouveauté</a></li>
                            <li><a href="Prochainement.php">Prochainement</a></li>
                          </ul>
                        </li>
                        <li><a href="ajout_film.php">Ajouter un film</a></li>
                        <li><a href="changer_salle.php">Changer un film de salle</a></li>
                        <li><a href="gestion_clients.php">Gestion des utilisateurs</a></li>
                        <li><a href="voir_reservation.php">Gestion des réservations</a></li>
                        <li><a href="Ajout_admin.php">Ajouter un administrateur</a></li>
                        <li><a href="../Traitement/session_destroy.php">Déconnexion</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Fin de la navbar -->

    <!-- Présentation de l'entreprise -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="../img/loyalty.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text ap-text">
                        <div class="section-title">
                            <span>Evolution</span>
                            <h2>Nous concernant</h2>
                        </div>
                        <p class="f-para">Présentation de l'évolution du nombre de nos partenariats ainsi que du nombre de membres fidéliter et pour finir le nombre d'employés.</p>
                        <div class="about-counter">
                            <div class="ac-item">
                                <h2 class="ab-count">100334</h2>
                                <p>Membre</p>
                            </div>
                            <div class="ac-item">
                                <h2 class="ab-count">156</h2>
                                <p>Partenariats</p>
                            </div>
                            <div class="ac-item">
                                <h2 class="ab-count">956</h2>
                                <p>Employés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la présenation -->

    <!-- Affichage du pied de page -->
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
                            <li><a href="View/reservation.php">Reservation</a></li>
                            <li><a href="View/contact.php">Contact</a></li>
                            <li><a href="View/Connexion.php">Connexion</a></li>
                            <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Rejoinez la newsletter</h5>
                        <p>Renseignez votre email pour profiter de toutes nos offres et nouveautés</p>
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
            <div class="copyright-text"><p><!-- Copyright -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
</p></div>
        </div>
    </section>
    <!-- Fin du pied de page -->

    <!-- Liens contenant le script de la page-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
