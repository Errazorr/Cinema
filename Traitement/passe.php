<?php
$mot_de_passe = new mot_de_passe($_POST["mail"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe //
$co->mot_de_passe($mot_de_passe);
$co->Mail($mot_de_passe);
?>
