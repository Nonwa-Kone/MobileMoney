<?php

use Class\Bilans;

require '../vendor/autoload.php';

$date = date('Y-m-d');

$totalOrange = Bilans::totalOrangeMoneyDeLaJournee($date);
$totalMtn = Bilans::totalMtnMoneyDeLaJournee($date);
$totalMoov = Bilans::totalMoovMoneyDeLaJournee($date);

$totalWave = Bilans::totalWaveMoneyDeLaJournee($date);

function totalMobileMoney(?string $orangeMoney, ?string $mtnMoney, ?string $moovMoney, ?string $waveMoney): int
{

    $orange = $orangeMoney !== null ? $orangeMoney : 0;
    $mtn = $mtnMoney !== null ? $mtnMoney : 0;
    $moov = $moovMoney !== null ? $moovMoney : 0;
    $wave = $waveMoney !== null ? $waveMoney : 0;

    $intOrange = intval($orange);
    $intMtn = intval($mtn);
    $intMoov = intval($moov);
    $intWave = intval($wave);

    $somme = $intOrange + $intMtn + $intMoov + $intWave;

    return $somme;
}


$montantTotalMobileMoneyDuJour = totalMobileMoney($totalOrange->total_orange, $totalMtn->total_mtn, $totalMoov->total_moov, $totalWave->total_wave);

if (isset($_POST['valider'])) {

    // Reccuperation des données utilisateur
    $orange = htmlspecialchars($_POST['total-orange']);
    $mtn = htmlspecialchars($_POST['total-mtn']);
    $moov = htmlspecialchars($_POST['total-moov']);
    $wave = htmlspecialchars($_POST['total-wave']);
    // $totalMoneyJour = htmlspecialchars($_POST['total-mobile-money']);
    $caisse = htmlspecialchars($_POST['caisse']);
    $total = htmlspecialchars($_POST['total-jour']);
    $resultat = Bilans::enregistrerBiLanParJour($date, $orange, $mtn, $moov, $wave, $caisse, $total);

    if ($resultat) {
        $success = "<p class='alert alert-success'>Bilan enregistré</p>";
    } else {
        $error = "<p class='alert alert-danger'>Echec de l'enregistrement</p>";
    }
}
