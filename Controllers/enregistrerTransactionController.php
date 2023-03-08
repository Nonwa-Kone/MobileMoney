<?php

use Class\Transactions;

require '../vendor/autoload.php';

$numeroExpediteur = htmlentities($_POST['numero-expediteur']);
$numeroDestinateur = htmlentities($_POST['numero-destinateur']);
$typeOperation = htmlentities($_POST['type-operation']);
$operateurMobile = htmlentities($_POST['operateur-mobile']);
$montant = htmlentities($_POST['montant']);
$statu = htmlentities($_POST['statu']);
$date = date('Y-m-d');

$reponseServeur = Transactions::enregistrerUneTransaction(
    $numeroExpediteur,
    $numeroDestinateur,
    $typeOperation,
    $operateurMobile,
    $montant,
    $statu,
    $date
);

echo $reponseServeur;
