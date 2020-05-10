<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Réserver</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- Test de connexion à la bdd -->
	<?php
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
	<!-- Affichage du formulaire permettantde changer la salle pour un film -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>reservation</h1>
							<p>Nous somme l'un des seuls cinéma en france à proposer une réservation en ligne. En effet veillez saisir les champs pour réserver vos places.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="POST" action="../Traitement/changer_salle.php">
								<div class="form-group">
									<span class="form-label">Choisir le film</span>
									<select class="form-control" name="film" placeholder="Choisissez un film">

											<?php
											// Sélection des films //
											$req = $bdd->query('SELECT film FROM salle');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) {
												//Affichage des données //
												echo '<option>'.$value["film"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Choisir la salle</span>
											<input class="form-control" type="text" name="salle" placeholder="Dans quelle salle" required>
										</div>
									</div>
								</div>
								<div class="row">
								</div>
								<div class="form-btn">
									<p><button class="submit-btn">Changer le film de salle</button></p>
									<button class="submit-btn" onclick="window.location.href='compte_admin.php'">Retour</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- Fin du formulaire -->

</html>
