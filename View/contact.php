<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nous contacter</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                      <ul>
                          <li class="active"><a href="index.php">Accueil</a></li>

                          <?php if (isset($_SESSION['mail'])) {
                            if ($role == "admin") { ?>
                            <li><a href="View/voir_reservation.php">Reservations</a></li>
                          <?php }

                          else {?>
                            <li><a href="View/reservation.php">Reservation</a></li>
                            <?php	}  ?>

                          <li><a href="View/Film.php">Film & évènement</a>
                              <ul class="dropdown">
                                  <li><a href="View/Nouveauté.php">Nouveauté</a></li>
                                  <li><a href="View/Prochainement.php">Prochainement</a></li>
                              </ul>
                          </li>
                          <li><a href="View/contact.php">Contact</a></li>

                          <?php if (isset($_SESSION['mail'])) { ?>

                            <li><a href="View/Connexion.php">Connexion</a></li>

                          <?php }

                          else {?>

                          <li><a href="View/Connexion.php">Déconnexion</a></li>
                        <?php	}  ?>
                      </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.131590048758!2d-75.49285368518825!3d40.60492025209744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c439862c390e25%3A0xd8a76e7325ce28ea!2sLiberty%20St%2C%20Allentown%2C%20PA%2C%20USA!5e0!3m2!1sen!2sbd!4v1580135217665!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
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
                                        Champ de Mars, Avenue de la Bourdonnais, 75007 Paris
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
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
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
                        <p>Renseignez votre email pour profiter de toutes nos offres et nouveautés</p>
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
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
