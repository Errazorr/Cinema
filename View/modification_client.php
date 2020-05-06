<!DOCTYPE html>
<html lang="en">

<?php
session_start();

try{
  $bdd= new PDO('mysql:host=localhost;dbname=cine; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}


$req = $bdd->prepare('SELECT * FROM compte WHERE nom=? AND prenom=?');
$req->execute(array($_SESSION['nom'], $_SESSION['prenom']));
$donnees= $req->fetch();
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier ses données</title><!-- Titre -->

    <!-- logo -->
    <link rel="stylesheet" href="../Inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../Inscription/css/style.css">
    <link rel="stylesheet" href="../Inscription/scss/common.scss">
    <link rel="stylesheet" href="../Inscription/css/style2.css">
</head>
<body>

    <div class="main">

        <!-- Début du formulaire -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Modification des données</h2>
                        <form method="POST" action="../Traitement/modification_client.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email" <?php echo 'value='.'"'.$donnees["mail"].'"'.''?>/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="tel" name="telephone" id="re_pass" placeholder="Numero de telephone" maxlength="10" minlength="10" <?php echo 'value='.'"'.$donnees["tel"].'"'.''?>/>
                            </div>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Cette partie n'est pas obligatoire</a></label>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="ancien_mdp" id="pass" placeholder="Ancien mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="pass" placeholder="Nouveau mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="confirm" id="pass" placeholder="Confirmer le nouveau mot de passe"/>
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
    <!-- Début du JS -->
    <script src="../Inscription/vendor/jquery/jquery.min.js"></script>
    <script src="../Inscription/js/main.js"></script>
</body><!-- fin -->
</html>
