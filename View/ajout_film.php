<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Hazze Template">
  <meta name="keywords" content="Hazze, unica, creative, html">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajouter un film</title>

  <!-- Liens contenant le style de la page  -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
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
</body>
<!-- Fin de la navbar -->

<!-- Affichage du pied de page  -->
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
				<!-- Fin du pied de page  -->

        <div class="copyright-text"><p><!-- Copyright-->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="ti-heart" aria-hidden="true"></i> par Yanish et Nathan</a>
</p></div>
    </div>
</section>
