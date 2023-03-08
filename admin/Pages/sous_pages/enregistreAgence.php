<?php

use Class\Agences;

require '../Controllers/Admin/enregistrerAgence.php';

require '../vendor/autoload.php';
?>

<div class="container mt-3">
    <h2>Enregistrer une nouvelle agence</h2>
    <form action="#" method="post">
        <div class="form-group">
            <?= $msg ?>
        </div>
        <div class="form-group mb-3">
            <label for="code-agence">Code de l'agence</label>
            <input type="text" name="code-agence" id="code-agence" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="nom-agence">Nom de l'agence</label>
            <input type="text" name="nom-agence" id="nom-agence" class="form-control">
        </div>
        <button type="submit" name="valider" class="btn btn-primary">Enregistrer</button>
    </form>
</div>