<?php
require '../Controllers/securityLoginController.php';
?>


<div class="container">
    <div id="heading">
        <h2>Enregistrement d'un client</h2>
    </div>
    <div class="serveur">
        <span id="reponse-serveur"></span>
    </div>
    <form class="form" id="form">
        <div class="form-group mb-3">
            <label for="nom-client" class="text-lead mb-1"><i class="bi bi-person"></i> Nom du client</label>
            <input type="text" name="nom-client" id="nom-client" class="form-control" autocomplete="off">
            <span id="error-nom" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="prenom-client" class="text-lead mb-1"><i class="bi bi-person"></i> Prenom du client</label>
            <input type="text" name="prenom-client" id="prenom-client" class="form-control" autocomplete="off">
            <span id="error-prenom" class="text-danger"></span>
        </div>
        <div class="form-group mb-3">
            <label for="contact" class="text-lead mb-1"><i class="bi bi-telephone"></i> Contact du client</label>
            <input type="text" name="contact" id="contact" class="form-control" autocomplete="off">
            <span id="error-contact" class="text-danger"></span>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i></button>
        <button type="reset" class="btn btn-danger"><i class="bi bi-x-lg"></i></button>
    </form>
</div>
<script src="/mobile_money_project/public/js/clients.js"></script>