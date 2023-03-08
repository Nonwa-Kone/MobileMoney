<?php

require '../vendor/autoload.php';

use Class\Admin\Pages;

$content = null;
$page = null;
$q = null;

if (isset($_GET['page']) or isset($_GET['p']) or isset($_GET['q'])) {

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else if (isset($_GET['p'])) {
        $p = $_GET['p'];
    } else if (isset($_GET['q'])) {
        $q = $_GET['q'];
    }
} else {
    $page = null;
    $p = null;
    $q = null;
}

ob_start();
// session_start();

if (isset($page) or isset($p) or isset($q)) {

    if ($page === 'agences') {
        require './Abobo.php';
    } else if ($p === 'agence') {
        require '../admin/Pages/sous_pages/enregistreAgence.php';
    } else if ($p === 'gerant') {
        require '../admin/Pages/sous_pages/enregistreGerant.php';
    } else if ($q === 'bilan') {
        require '../admin/Pages/sous_pages/rechercherBilan.php';
    } else {
        // require "../admin/dashboard/index.php";
    }
} else {
    $page = null;
    $p = null;
}

$content = ob_get_clean();
require '../admin/dashboard/index.php';
