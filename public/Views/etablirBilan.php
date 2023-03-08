<?php

use Class\Bilans;

require '../Controllers/securityLoginController.php';

require '../Controllers/etablissementBilanController.php';
?>

<div class="container">
    <div id="heading">
        <h2>Etablissement du bilan de la journée</h2>
    </div>
    <form class="form" id="form" method="POST">
        <div class="form-group">
            <?php if (isset($success)) echo $success ?>
            <?php if (isset($error)) echo $error ?>
        </div>
        <div class="form-group mb-3">
            <label for="total-orange" class="text-lead mb-1">Montant total Orange money du jour</label>
            <input type="text" name="total-orange" id="total-orange" class="form-control" autocomplete="off" readonly value="<?= $totalOrange->total_orange !== null ? $totalOrange->total_orange : 0 ?>">
            <span id="error-nom" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="total-mtn" class="text-lead mb-1">Montant total Mtn money du jour</label>
            <input type="text" name="total-mtn" id="total-mtn" class="form-control" autocomplete="off" readonly value="<?= $totalMtn->total_mtn !== null ? $totalMtn->total_mtn : 0 ?>">
            <span id="error-prenom" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="total-moov" class="text-lead mb-1">Montant total Moov money du jour</label>
            <input type="text" name="total-moov" id="total-moov" class="form-control" autocomplete="off" readonly value="<?= $totalMoov->total_moov !== null ? $totalMoov->total_moov : 0 ?>">
            <span id="error-contact" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="total-wave" class="text-lead mb-1">Montant total Wave money du jour</label>
            <input type="text" name="total-wave" id="total-wave" class="form-control" autocomplete="off" readonly value="<?= $totalWave->total_wave !== null ? $totalWave->total_wave : 0 ?>">
            <span id="error-contact" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="total-mobile-money" class="text-lead mb-1">Montant Total Mobile money du jour</label>
            <input type="text" name="total-mobile-money" id="total-mobile-money" class="form-control" autocomplete="off" readonly value="<?= $montantTotalMobileMoneyDuJour ?>">
            <span id="error-contact" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="caisse" class="text-lead mb-1">Saisissez le montant de la caisse</label>
            <input type="text" name="caisse" id="caisse" class="form-control" autocomplete="off">
            <span id="error-caisse" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="total-jour" class="text-lead mb-1">Montant total du jour</label>
            <input type="text" name="total-jour" id="total-jour" class="form-control" autocomplete="off" readonly>
            <span id="error-contact" class="text-danger"></span>
        </div>
        <button name="valider" type="submit" class="btn btn-primary">Enregistrer le bilan du jour</button>
        <button type="reset" class="btn btn-danger">Annuler l'enregistrement</button>
    </form>
</div>
<script src="/mobile_money_project/public/js/bilan.js"></script>