<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();

try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('SELECT role FROM compte WHERE mail=?');
//$req->execute(array($_SESSION['mail']));//
$role= $req->fetch();
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hazze | Template</title>

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
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                      <ul>

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
    <!-- Header End -->

    <!-- Blog Section Begin -->
    <div class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="../img/blog/Grand.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>Le 1 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 0</li>
                                    </ul>
                                    <p> Les Grands Voisins. À travers leurs trajectoires et celles des membres fondateurs du lieu, le film interroge notre désir et notre capacité à inventer d'autres manières de vivre ensemble.</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <img src="..img/blog/author-1.jpg" alt="">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Les grands voisins</h5>
                                            <span>Documentaire</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="../img/blog/contes.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Le 1 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 1</li>
                                    </ul>
                                    <p>Découvrez Les petits contes de la nuit, à partir du 1er avril. Une histoire, un câlin, un bon lit, il en faut peu pour bien dormir ! Six contes-doudous pour aborder avec les tout-petits l'univers du sommeil et de la nuit.</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <img src="..img/blog/author-1.jpg" alt="">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Les petit contes de la nuit</h5>
                                            <span>Dessin-animé</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item solid-bg">
                        <div class="bi-text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>Le 11 Avril 2020</li>
                                <li><i class="fa fa-commenting-o"></i> 8</li>
                            </ul>
                            <h4><a href="./blog-details.html">En direct de New-York</a></h4>
                            <p>Le prisonnier politique Angelotti s'est enfui de son lieu de détention et va trouver de l'aide auprès de son ami le peintre Cavaradossi. Le baron Scarpia, chef de la police, se doutant de la complicité du peintre, manipule son amante Floria Tosca en tirant profit de sa jalousie.</p>
                            <div class="bt-author">
                                <div class="ba-pic">
                                </div>
                                <div class="ba-text">
                                    <h5>Tosca (Metropolitan Opera)</h5>
                                    <span>Piéce de théatre</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="../img/blog/spectre.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>Le 2 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 4</li>
                                    </ul>
                                    <p> Redécouvrez sur grand écran le quatrième opus où Daniel Craig incarne l'agent 007. Un message cryptique venu tout droit de son passé pousse Bond à enquêter sur une sinistre organisation.</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                            <img src="..img/blog/author-2.jpg" alt="">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Spectre</h5>
                                            <span>Action</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="../img/blog/Pierre.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>le 8 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 2</li>
                                    </ul>
                                    <p>Béa, Thomas et les lapins forment désormais une famille recomposée, mais Pierre a beau faire tout son possible, il ne semble parvenir à se débarrasser de la réputation de voyou qui lui colle à la peau.</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Pierre lapin 2</h5>
                                            <span>Dessin-animé</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bi-pic set-bg" data-setbg="../img/blog/soi.jpg"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bi-text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>Le 1 Avril 2020</li>
                                        <li><i class="fa fa-commenting-o"></i> 1</li>
                                    </ul>
                                    <p>Catherine et Yann sont en couple et amoureux depuis de nombreuses années. Cependant, depuis que Yann a quitté son travail, il s'est pris de passion pour les bonsaïs. Une passion dévorante...</p>
                                    <div class="bt-author">
                                        <div class="ba-pic">
                                        </div>
                                        <div class="ba-text">
                                            <h5>Chacun chez soi</h5>
                                            <span>Drama</span>
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
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
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
