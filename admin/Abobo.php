<?php

use Class\Admin\Pages;
use Class\Agences;

require '../vendor/autoload.php';

$nbre = Pages::totalTransaction($_GET['code']);
$ca = Pages::chiffreAffaire($_GET['code']);
$cam = Pages::chiffreAffaireMoyenne($_GET['code']);

$client = Pages::totalClient();

$agence = Agences::nomAgence($_GET['code']);

?>
<div class="container mt-3">
    <h2 class="mb-3 text-center">Page d'acceuil <?= $agence->nom_agence ?></h2>
    <div class="row">
        <div class="col-md-9 mb-3 text-center">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Total client</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><?= $client->tle_client ?></h1>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Total transactions</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><?= $nbre->total ?> <small class="text-muted fw-light">Transactions</small></h1>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Chiffre d'affaire</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><?= $ca->montant !== null ? $ca->montant : 0 ?> <small class="text-muted fw-light">F CFA</small></h1>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Chiffre d'affaire moyenne</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><?= $cam->moyenne !== null ? $cam->moyenne : 0 ?><small class="text-muted fw-light"></small></h1>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 text-start position-sticky pt-3 sidebar-sticky">
            <ul class="nav w-auto d-flex flex-column">
                <li class="nav-link">
                    <a href="./Pages/sous_pages/rechercherBilan.php?code=<?= $_GET['code'] ?>" class="nav-item gap-3 py-3" aria-current="true">Rechercher le bilan d'une journée</a>
                </li>
                <li class="nav-link">
                    <a href="index.php?page=agences&code=<?= $_GET['code'] ?>&q=jr" class="nav-item gap-3 py-3" aria-current="true">Journee</a>
                </li>
                <li class="nav-link">
                    <a href="index.php?page=agences&code=<?= $_GET['code'] ?>&q=rapport" class="nav-item gap-3 py-3" aria-current="true">Rapport</a>
                </li>
            </ul>
        </div>
    </div>
</div>