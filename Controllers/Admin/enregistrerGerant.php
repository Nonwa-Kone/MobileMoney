<?php

use Class\Admin\Gerants;

require '../vendor/autoload.php';

$msg = null;

if (isset($_POST['valider'])) {
    $nom = htmlentities($_POST['nom-gerant']);
    $prenom = htmlentities($_POST['prenom-gerant']);
    $contact = htmlentities($_POST['tel-gerant']);
    $agence = htmlentities($_POST['nom-agence']);

    $msg = Gerants::enregistrer($nom, $prenom, $contact, $agence);
}
