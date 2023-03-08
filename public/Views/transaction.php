<?php
require '../Controllers/securityLoginController.php';
?>

<div class="container">
    <h2>Enregistrer une transaction</h2>
    <div id="serveur" class="mb-3">
        <span id="reponse-serveur"></span>
    </div>
    <form class="form" id="form">
        <div class="form-group mb-3">
            <label for="numero-expediteur" class="text-lead mb-1">Numéro expéditeur</label>
            <input type="text" name="numero-expediteur" id="numero-expediteur" class="form-control" autocomplete="off">
            <span id="error-expediteur" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="numero-destinateur" class="text-lead mb-1">Numéro destinateur</label>
            <input type="text" name="numero-destinateur" id="numero-destinateur" class="form-control" autocomplete="off">
            <span id="error-destinateur" class="text-danger"></span>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6">
                <label for="type-operation" class="text-lead mb-1">Choississez le type d'opération</label>
                <select name="type-operation" id="type-operation" class="form-control">
                    <option value="Depot">Dépot</option>
                    <option value="Rétrait">Rétrait</option>
                    <option value="Transfert">Transfert</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="operateur-mobile" class="text-lead mb-1">Choississez un opérateur mobile</label>
                <select name="operateur-mobile" id="operateur-mobile" class="form-control">
                    <option value="mtn money">Mtn money</option>
                    <option value="orange money">Orange money</option>
                    <option value="moov money">Moov money</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6">
                <label for="montant" class="text-lead mb-1">Montant</label>
                <input type="text" name="montant" id="montant" class="form-control" autocomplete="off">
                <span id="error-montant" class="text-danger"></span>
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="statu" class="text-lead mb-1">Statu</label>
                <input type="text" name="statu" id="statu" class="form-control" autocomplete="off">
                <span id="error-statu" class="text-danger"></span>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Valider</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
    </form>
</div>
<script src="/mobile_money_project/public/js/main.js"></script>
<!-- <script src="/mobile_money_project/public/js/formEnregistrerTransaction.js"></script> -->