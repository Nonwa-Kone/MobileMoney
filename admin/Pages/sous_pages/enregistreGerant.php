<?php

use Class\Agences;

require '../Controllers/Admin/enregistrerGerant.php';
require '../vendor/autoload.php';


?>
<div class="container mt-3">
    <h2>Enregistrer un nouveau gerant</h2>
    <form action="#" method="post">
        <div class="form-group">
            <?= $msg ?>
        </div>
        <div class="form-group mb-3">
            <label for="nom-gerant" class="mb-1 text-lead">Nom du gerant</label>
            <input type="text" name="nom-gerant" id="nom-gerant" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="prenom-gerant" class="mb-1 text-lead">Prenom du gerant</label>
            <input type="text" name="prenom-gerant" id="prenom-gerant" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="tel-gerant" class="mb-1 text-lead">Contact du gerant</label>
            <input type="text" name="tel-gerant" id="tel-gerant" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="nom-agence" class="mb-1 text-lead">Choisissez l'agence où il travail</label>
            <input type="text" name="nom-agence" id="nom-agence" class="form-control" list="agence">
            <datalist id="agence">
                <?php foreach (Agences::listeDesAgences() as $agence) : ?>
                    <option value="<?= $agence->nom_agence ?>"></option>
                <?php endforeach; ?>
            </datalist>
        </div>
        <button type="submit" name="valider" class="btn btn-primary">Enregistrer</button>
    </form>
</div>