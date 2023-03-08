<?php

use Class\Bilans;

require '../vendor/autoload.php';

$date = htmlspecialchars($_POST['date-bilan']);
$bilan = Bilans::rechercheBilanDuneDate($date);
if ($bilan) {
?>

    <div class="card mt-5">
        <div class="card-head">
            <h1 class="display-4">Rapport de la date du <?= $bilan->date_bilan ?></h1>
        </div>
        <div class="card-body">
            <h3 class="mb-3">Les details du bilan</h3>
            <p>Total Orange Money <?= $bilan->bilan_orange ?> <strong>F CFA</strong></p>
            <p>Total Mtn Money <?= $bilan->bilan_mtn ?> <strong>F CFA</strong></p>
            <p>Total Moov Money <?= $bilan->bilan_moov ?> <strong>F CFA</strong></p>
            <p>Total Wave Money <?= $bilan->bilan_wave ?> <strong>F CFA</strong></p>
            <p>Caisse du jour <?= $bilan->caisse_jour ?> <strong>F CFA</strong></p>
        </div>
        <div class="card-footer">
            <p>Point du jour <?= $bilan->total ?> <strong>F CFA</strong></p>
        </div>
    </div>
<?php
}
