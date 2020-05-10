<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Logo-->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Lien contenant le style de la page -->
    <link rel="stylesheet" href="../inscription/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Affichage du formulaire de récupération de mot de passe -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Mot de passe oublié</h2>
                        <form method="POST" action="../Manager/mot_de_passe2.php" class="register-form" id="register-form">
                          <div class="form-group">
                              <label for="email"></label>
                              <input type="email" name="mail" id="email" placeholder="Votre email"/>
                          </div>
                            <div class="form-group">
                                <label for="mdp"></label>
                                <input type="password" name="mdp" id="mdp" placeholder="Votre nouveau mot de passe"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Envoyer"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Inscription/images/mdp.jpg" alt="sing up image"></figure>   <!--Bouton permettant d'envoyer les données-->
                        <a href="../View/connexion.php" class="signup-image-link">Deja membre</a>  <!--Bouton permettant d'être rediriger vers la page connexion -->
                    </div>
                </div>
            </div>
        </section>
<!-- Fin du formulaire -->
    </div>
