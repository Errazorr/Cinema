<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Modifier une réservation</title>

	<!-- logo -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <!-- Liens contenant le style de la page  -->
	<link type="text/css" rel="stylesheet" href="../reservation/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="../reservation/css/style.css" />


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
	  <!-- Affichage d'un formulaire permettant de supprimer un client  -->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Suppression</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="POST" action="../Traitement/supprimer_client.php">
								<div class="form-group">
									<span class="form-label">Choisir le nom de la personne à supprimer</span>
									<select class="form-control" name="nom" placeholder="Choisissez un film">

											<?php
											// Sélectionne les nom de la table compte en fonction du role //
											$req = $bdd->query('SELECT nom FROM compte WHERE role="Client"');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) {
												//affiche les valeurs //
												echo '<option>'.$value["nom"].'</option>';
											}
											?>

									</select>
								</div>

                <div class="form-group">
									<span class="form-label">Choisir le prénom de la personne à supprimer</span>
									<select class="form-control" name="prenom" placeholder="Choisissez un film">

											<?php
											$req = $bdd->query('SELECT prenom FROM compte WHERE role="Client"');
									    $donnees= $req->fetchall();

											foreach ($donnees as $value) {
												echo '<option>'.$value["prenom"].'</option>';
											}
											?>

									</select>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Supprimer le client</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- Fin du formulaire  -->

</html>
