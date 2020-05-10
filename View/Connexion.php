<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>

    <!-- Icon de connexion -->
    <link rel="stylesheet" href="../connexion/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Liens contenant le style de la page  -->
    <link rel="stylesheet" href="../connexion/css/style.css">
    <link rel="stylesheet" href="../connexion/css/style2.css">
</head>
<body>

  <!-- Formulaire de connexion  -->
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" action="../Traitement/Connexion.php" id="signup-form" class="signup-form">
                    <h2>Connexion</h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="mail" id="mail" placeholder="Votre Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="mdp" id="password" placeholder="Votre mot de passe"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                      <div class="form-group">
                    <a href="mot_de_passe.php" class="label-agree-term">Mot de passe oublier ?</a>
                  </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Se connecter"/>
                        <a href="Inscription.php" class="submit-link submit">Inscription</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- liens contetant le script de la page -->
    <script src="../connexion/vendor/jquery/jquery.min.js"></script>
    <script src="../connexion/js/main.js"></script>
</body>
</html>
