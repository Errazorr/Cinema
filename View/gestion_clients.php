<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Hazze Template">
  <meta name="keywords" content="Hazze, unica, creative, html">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Les réservations</title>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../tableau/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tableau/css/util.css">
	<link rel="stylesheet" type="text/css" href="../tableau/css/main.css">
  <link rel="stylesheet" type="text/css" href="../tableau/css/style.css">
	<link rel="stylesheet" type="text/css" href="../tableau/css/style2.css">
<!--===============================================================================================-->

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

	<?php
	//Connexion à la bdd
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>

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


		<div class="container-table100">
			<div class="wrap-table100">

        <div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nom</th>
									<th class="cell100 column2">Prénom</th>
									<th class="cell100 column3">Adresse mail</th>
									<th class="cell100 column4">Téléphone</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
								//Selection de toutes les données de la table compte où le role est client
								$req = $bdd->query('SELECT * FROM compte WHERE role="client"');
								$donnees= $req->fetchall();

								//Tableau avec toutes les données trouvées précédemment
								foreach ($donnees as $value) {
									echo '<tr class="row100 body">
												<td class="cell100 column1">'.$value["nom"].'</td>
												<td class="cell100 column2">'.$value["prenom"].'</td>
												<td class="cell100 column3">'.$value["mail"].'</td>
												<td class="cell100 column4">'.$value["tel"].'</td>
												</tr>';
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 register">
						 <center><button type="button" class="btn btn-outline-danger btn-lg" onclick="window.location.href='choix_client.php'">Modifier</button></center>
					</div>
					<div class="col-md-6 register">
						 <center><button type="button" class="btn btn-outline-danger btn-lg" onclick="window.location.href='supprimer_client.php'">Supprimer</button></center>
					</div>
			</div>
			</div>
		</div>

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
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        </div>
    </section>


<!--===============================================================================================-->
	<script src="../tableau/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../tableau/vendor/bootstrap/js/popper.js"></script>
	<script src="../Tableau/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../tableau/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../tableau/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/mixitup.min.js"></script>
  <script src="../js/jquery.slicknav.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/main.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
<!--===============================================================================================-->
	<script src="../tableau/js/main.js"></script>

</body>
</html>
