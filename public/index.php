<?php

use Config\Database;

require '../vendor/autoload.php';

$content = null;

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
Database::getPDO();
// session_start();
if ($p === 'home') {
    require './Views/index.php';
} else if ($p === 'client') {
    require './Views/costumer.php';
} else if ($p === 'transaction') {
    require './Views/transaction.php';
} else if ($p === 'search') {
    require './Views/search.php';
} else if ($p === 'liste') {
    require './Views/listeTransactionParJour.php';
} else if ($p === 'bilan') {
    require './Views/etablirBilan.php';
} else if ($p === 'rapport') {
    require './Views/rechercheBilanUneDate.php';
} else {
    require "./Views/index.php";
}

$content = ob_get_clean();
require './home.php';
