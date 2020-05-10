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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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

                        <?php
                        if (isset($_SESSION['mail'])){
                          if ($_SESSION['role'] == "client") { ?>
                            <li class="active"><a href="index.php">Accueil</a></li>
                            <li><a href="View/reservation.php">Réservation</a></li>
                            <li><a href="View/Nouveaute.php">Film & évènement</a>
                                <ul class="dropdown">
                                    <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                                    <li><a href="View/Prochainement.php">Prochainement</a></li>
                                </ul>
                            </li>
                            <li><a href="View/contact.php">Contact</a></li>
                            <li><a href="View/compte_client.php">Mon compte</a></li>
                            <li><a href="Traitement/session_destroy.php">Déconnexion</a></li>
                          <?php  }

                           else { ?>
                            <li class="active"><a href="index.php">Accueil</a></li>
                            <li><a href="View/Nouveaute.php">Film & évènement</a>
                                <ul class="dropdown">
                                    <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                                    <li><a href="View/Prochainement.php">Prochainement</a></li>
                                </ul>
                            </li>
                            <li><a href="View/contact.php">Contact</a></li>
                            <li><a href="View/compte_admin.php">Mon compte</a></li>
                            <li><a href="Traitement/session_destroy.php">Déconnexion</a></li>
                        <?php }
                      }
                      else{ ?>
                          <li class="active"><a href="index.php">Accueil</a></li>
                          <li><a href="View/Nouveaute.php">Film & évènement</a>
                              <ul class="dropdown">
                                  <li><a href="View/Nouveaute.php">Nouveauté</a></li>
                                  <li><a href="View/Prochainement.php">Prochainement</a></li>
                              </ul>
                          </li>
                          <li><a href="View/contact.php">Contact</a></li>
                          <li><a href="View/Connexion.php">Connexion</a></li>

                        <?php	}  ?>

                      </ul>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/cinema.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hs-text">
                        <span>Bienvenue au</span>
                        <h2>Palais du cinéma</h2>
                        <p>Un énorme cinéma sur 3 étages!</p>
                        <a href="#" class="primary-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/Histoire.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <span>A props de nous</span>
                            <h2>Notre histoire</h2>
                        </div>
                        <p class="f-para">Ce cinéma sur 5 étages a été créé par M.Bhujun et M.Goncalves en collaboration.
                          Notre cinéma vous proposera les films les plus récents et attendus! </p>
                        <a href="#" class="primary-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nos services</span>
                        <h2>Nous avons les meilleurs services au monde</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-1.png" alt="">
                        <h4>Nos salles</h4>
                        <p>Toutes nos salles sont équipées de la dernière technologie : la 4DX.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-2.png" alt="">
                        <h4>Offre attractive</h4>
                        <p>En effet, chez nous on ne rigole pas, 1 place achetée = 1 place offerte.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="img/services/service-3.png" alt="">
                        <h4>On prend soin de vous</h4>
                        <p>Avec notre offre de fidélité vous permettant de gagner des cadeaux.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Les films</span>
                        <h2>DU MOIS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg large-item" data-setbg="img/foret.jpg">
                        <div class="pi-hover">
                            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                            <a href="img/foret.jpg" class="search-icon image-popup"><i
                                    class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg" data-setbg="img/avant.jpg">
                        <div class="pi-hover">
                            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                            <a href="img/avant.jpg" class="search-icon image-popup"><i
                                    class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="img/sonic.jpg">
                                <div class="pi-hover">
                                    <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                    <a href="img/sonic.jpg" class="search-icon image-popup"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item set-bg" data-setbg="img/gaull.jpg">
                                <div class="pi-hover">
                                    <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                                    <a href="img/gaull.jpg" class="search-icon image-popup"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="counter-text">
                        <div class="section-title">
                            <span>Nos cinémas</span>
                            <h2>Nous avons beaucoup de cinémas<br/>Principalement en France</h2>
                        </div>
                        <a href="View/contact.php" class="primary-btn">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="counter-item">
                        <div class="ci-number count">
                            350
                        </div>
                        <div class="ci-text">
                            <h4>Films projettés</h4>
                            <p>C'est le nombre de films affichés dans notre cinéma à Paris par jour.</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="ci-number count">
                            132
                        </div>
                        <div class="ci-text">
                            <h4>Évènements</h4>
                            <p>C'est le nombres d'évènements organisés depuis le 1er janvier </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row testimonial-slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/testimonial/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Travis Crawford</h4>
                                <span>Employé chez palais du cinéma</span>
                            </div>
                            <p>Chaque jour c'est un plaisir de venir travailer dans cette arêne qu'est le Palais du cinéma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-pic">
                            <img src="img/testimonial/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ti-text">
                            <div class="ti-title">
                                <h4>Noah Padilla</h4>
                                <span>De passage à Paris</span>
                            </div>
                            <p>J'ai décidé d'aller au Palais du cinéma avec des amis et je ne le regrette pas, le cinéma est très agréable et confortable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Member Section Begin -->
    <section class="member-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Nos film</span>
                        <h2>Les films du moment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/joker.jpg">
                        <div class="mi-text">
                            <p>Dans les années 1980, à Gotham City, Arthur Fleck, un comédien de stand-up raté est agressé alors qu'il ère dans les rues de la ville déguisé en clown. Méprisé de tous et bafoué, il bascule peu à peu dans la folie pour devenir le Joker, un dangereux tueur psychotique.</p>
                            <div class="mt-title">
                                <h4>Joker</h4>
                                <span>Action</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/pinocchio.jpg">
                        <div class="mi-text">
                            <p>Pour atténuer sa solitude, Geppetto construit une marionnette en bois en guise de fils. Par magie, le pantin prend vie et le jeune Pinocchio n'a plus qu'un seul but dans sa vie : devenir un véritable petit garçon. Cependant, grandir va s'avérer être une entreprise difficile.</p>
                            <div class="mt-title">
                                <h4>Pinocchio</h4>
                                <span>Aventure</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/Grudge.jpg">
                        <div class="mi-text">
                            <p>The Grudge ou Rage Meurtrière au Québec, est un film d'horreur américain réalisé par Nicolas Pesce et sorti en 2020. Il s'agit d'une suite à la trilogie américaine initiée par Sam Raimi, se déroulant pendant et après les événements du premier film, sorti en 2004, et de ses suites, sorties en 2006 et 2009.</p>
                            <div class="mt-title">
                                <h4>The Grudge</h4>
                                <span>Horreur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Member Section End -->

    <!-- Blog Section Begin -->
    <div class="blog-section latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Les films</span>
                        <h2>A venir !</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="img/widow.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>  29 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 0</li>
                                    </ul>
                                    <h4><a href="#"></a></h4>
                                    <p>Natasha Romanoff, alias Black Widow, voit resurgir la part la plus sombre de son passé pour faire face à une redoutable conspiration liée à sa vie d’autrefois</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <img src="img/widow.jpg" alt="">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Black Widow</h5>
                                            <span>Action</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="img/fast.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 0</li>
                                    </ul>
                                    <h4><a href="#"><p>Le neuvième volet de la saga "Fast & Furious"...</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <img src="img/fast.jpg" alt="">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Fast & Furious 9</h5>
                                            <span>Aventure, action</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

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
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
