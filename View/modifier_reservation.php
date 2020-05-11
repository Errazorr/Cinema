<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Modifier une réservation</title>

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
	<?php
	//COnnexion à la bdd
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Modification</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="POST" action="../Traitement/modification_reservation.php">
								<div class="form-group">
									<span class="form-label">Choisir la réservation à modifier</span>
									<select class="form-control" name="reservation" placeholder="Choisissez un film">

											<?php
											//Selection des informations importantes de chaque réservation
											$req = $bdd->query('SELECT reservation FROM reservation');
									    $donnees= $req->fetchall();

											//Liste déroulante avec chaque réservation
											foreach ($donnees as $value) {
												echo '<option>'.$value["reservation"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Choisir la nouvelle date</span>
											<input class="form-control" type="date" name="date" placeholder="aaaa/mm/jj" required>
										</div>
									</div>
								</div>
                <div class="form-group">
									<span class="form-label">Choisir le nouveau film</span>
									<select class="form-control" name="film" placeholder="Choisissez un film">

											<?php
											$req = $bdd->query('SELECT film FROM salle');
									    $donnees= $req->fetchall();

											//Liste déroulante avec chaque film
											foreach ($donnees as $value) {
												echo '<option>'.$value["film"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="row">


								</div>
								<div class="form-btn">
									<button class="submit-btn">Modifier la réservation</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
