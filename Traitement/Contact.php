<?php
$contact = new contact($_POST["nom"], $_POST["mail"], $_POST["message"]); // enregsitrement des données //
$co = new Manager(); // nouvelles classe //
$co->contact($contact);
$co->Mail($contact);
?>
