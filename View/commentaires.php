<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Commentaires</title>

	<!-- Logo -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Liens constenant le style de la page -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />

</head>

<body>

	<!-- Test de connexion à la bdd -->
	<?php
	//Connexion à la bdd
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
<!-- Affichage du formulaire permettant d'ajouter un commentaire -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Commentaires</h1>
							<p>Laissez donc un petit commentaire sur le film que vous venez de voir. Faites nous savoir ce que vous en avez pensé.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="POST" action="../Traitement/commentaires.php">
								<div class="form-group">
									<span class="form-label">Choisir le film</span>
									<select class="form-control" name="film" placeholder="Choisissez un film">

											<?php
											//Sélection des films //
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
									<div class="form-group">
										<span class="form-label">Entrez un commentaire</span>
										<input class="form-control" type="textarea" name="commentaire" placeholder="Laissez un commentaire" required>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Valider</button>
									<button class="submit-btn" onclick="window.location.href='compte_client.php'">Retour</button>
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
