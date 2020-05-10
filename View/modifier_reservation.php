<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Modifier une réservation</title>

	<!-- Logo -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Liens contenant le style de la page  -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />

</head>

<body>

	<!-- Test de connexion à la bdd  -->
	<?php
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
	<!-- Affichage du formulaire permettant la modification de la réservation -->
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
											// Séletion des films, nom et la date prévue //
											$req = $bdd->query('SELECT film, nom, date_prevue FROM reservation INNER JOIN salle ON num_salle=num');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) { // Affichage des informations //
												echo '<option>'.$value["nom"]."/".$value["film"]."/".$value['date_prevue'].'</option>';
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
											// Sélection des films //
											$req = $bdd->query('SELECT film FROM salle');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) {
												// Affichage des informations //
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
</body><!-- Fin du formulaire  -->

</html>
