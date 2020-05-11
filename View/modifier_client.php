<!DOCTYPE html>
<html lang="en">
<!-- Test de connexion a la bdd -->
<?php
session_start();

try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Sélection des id de la table compte en fonction du nom //
$req = $bdd->prepare('SELECT id FROM compte WHERE nom=?');
$req->execute(array($_POST['client']));
$id= $req->fetch();
$_SESSION['id'] = $id[0];
//Sélection de l'ensemble des informations de la table compte en fonction de l'id //
$rec = $bdd->prepare('SELECT * FROM compte WHERE id=?');
$rec->execute(array($id[0]));
$donnees= $rec->fetch();
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier ses données</title><!-- Titre -->

    <!-- logo -->
    <link rel="stylesheet" href="../Inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Liens contenant le style de page -->
    <link rel="stylesheet" href="../Inscription/css/style.css">
    <link rel="stylesheet" href="../Inscription/scss/common.scss">
    <link rel="stylesheet" href="../Inscription/css/style2.css">
</head>
<body>

    <div class="main">

        <!-- Début du formulaire de modification_client-->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Modification des données</h2>
                        <form method="POST" action="../Traitement/modifier_client.php" class="register-form" id="register-form">
                          <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="nom" id="name" placeholder="Votre nom" <?php echo 'value='.'"'.$donnees["nom"].'"'.''?>/>
                          </div>
                          <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="prenom" id="surname" placeholder="Votre prénom" <?php echo 'value='.'"'.$donnees["prenom"].'"'.''?>/>
                          </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email" <?php echo 'value='.'"'.$donnees["mail"].'"'.''?>/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="tel" name="telephone" id="re_pass" placeholder="Numero de telephone" maxlength="10" minlength="10" <?php echo 'value='.'"'.$donnees["tel"].'"'.''?>/>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>j'accepte les <a href="#" class="term-service">termes et services</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Enregistrer"/><!-- Bouton permettant l'envoie des données -->
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Inscription/images/Cinema.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

    </div>
<!-- Fin du formulaire -->

    <!-- Liens contenant le script de la page -->
    <script src="../Inscription/vendor/jquery/jquery.min.js"></script>
    <script src="../Inscription/js/main.js"></script>
    <!-- fin du script -->
</body>
</html>
