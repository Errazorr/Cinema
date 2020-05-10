<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Modifier une réservation</title>

	<!-- Logo -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Liens contenant le style de la page  -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />



</head>

<body>
	<?php
	//Test de connexion à la bdd//
	try{
		$bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
	}
	catch (Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	?>
	<!-- Affichage du formulaire permettant de moddifier le client   -->
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
							<form method="POST" action="../View/modifier_client.php">
								<div class="form-group">
									<span class="form-label">Choisir la personne à modifier</span>
									<select class="form-control" name="client" placeholder="Choisissez un film">

											<?php
											//Sélection des nom de la table compte en focnton du role //
											$req = $bdd->query('SELECT nom FROM compte WHERE role="Client"');
									    $donnees= $req->fetchall();
											//Affichage des données //
											foreach ($donnees as $value) {
												echo '<option>'.$value["nom"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Modifier la personne</button><!-- Button permettant l'envoie des données   -->
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
