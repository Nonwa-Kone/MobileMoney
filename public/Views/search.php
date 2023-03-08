<?php
require '../Controllers/securityLoginController.php';
?>
<div class="container">
    <h2>Recherche Transaction</h2>
    <form class="form my-3" id="form">
        <div class="row">
            <div class="col-md-3 form-group">
                <label for="expediteur">Numéro expéditeur</label>
                <input type="text" name="expediteur" id="expediteur" class="form-control">
            </div>
            <div class="col-md-3 form-group">
                <label for="destinateur">Numéro destinateur</label>
                <input type="text" name="destinateur" id="destinateur" class="form-control">
            </div>
            <div class="col-md-3 form-group">
                <label for="dates">Date de l'opération</label>
                <input type="date" name="dates" id="dates" class="form-control">
            </div>
            <div class="col-md-3 d-flex justify-content-flex-start align-items-flex-start">
                <button type="submit" class="btn btn-primary bg-warning"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </form>
    <div id="reponse-serveur">
    </div>
</div>

<script src="/mobile_money_project/public/js/search.js"></script>