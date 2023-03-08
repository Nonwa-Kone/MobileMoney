<?php

use Class\Agences;

require '../vendor/autoload.php';

$msg = null;

if (isset($_POST['valider'])) {
    $code = htmlentities($_POST['code-agence']);
    $nom = htmlentities($_POST['nom-agence']);
    $msg = Agences::enregistrer([$code, $nom]);
}
