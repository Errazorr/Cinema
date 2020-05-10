<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Réserver</title>

	<!-- Liens contenant le style de la page  -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />

</head>

<body>

<!-- Test de connexion à la bdd-->
	<?php
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
	<!-- Affichage du formulaire de réservation -->
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
							<form method="POST" action="../Traitement/Reservation.php">
								<div class="form-group">
									<span class="form-label">Choisir le film</span>
									<select class="form-control" name="film" placeholder="Choisissez un film">

											<!-- Selection des films permettant leur affichage dans le formulaire-->
											<?php
											$req = $bdd->query('SELECT film FROM salle');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) {
												echo '<option>'.$value["film"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Choisir la date</span>
											<input class="form-control" type="date" name="date" placeholder="aaaa/mm/jj" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adolescents</span>
											<select class="form-control" name="ado">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adulte</span>
											<select class="form-control" name="adulte">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Enfant</span>
											<select class="form-control" name="enfant">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Verifier la disponibilités</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- Fin du formulaire-->

</html>
