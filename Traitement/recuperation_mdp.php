<?php
$mot_de_passe_oublie= new mot_de_passe_oublie($_POST['mdp'], $_POST["mail"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe //
$co->mot_de_passe_oublie($mot_de_passe_oublie);
?>
