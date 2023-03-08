<?php

require '../Controllers/securityLoginController.php';

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Money</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-around align-items-center">
                <i class="bi bi-building fs-2 text-warning"></i>
                <h2 class="text-warning">Gestion des activités Mobile Money</h2>
                <div id="profil" class="d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-person-circle text-warning fs-1"></i>
                        <p style="font-size: 12px; color: #fff;">Agence <?= $_SESSION['pseudo'] ?></p>
                    </div>
                    <a href="../Controllers/logoutController.php" class="btn"><i class="bi bi-power text-light"></i></a>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="container-fluid">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-lg-2 vh-100" id="sidebar">
                    <nav>
                        <a class="active nav-link" href="index.php?p=home"><i class="bi bi-house-door text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=client"><i class="bi bi-person-plus text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=transaction"><i class="bi bi-card-heading text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=search"><i class="bi bi-search text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=liste"><i class="bi bi-card-list text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=bilan"><i class="bi bi-pencil-square text-warning fs-1"></i></a>
                        <a class="nav-link" href="index.php?p=rapport"><i class="bi bi-journal-text text-warning fs-1"></i></a>
                    </nav>
                </div>
                <div class="col-lg-10 me-0" id="app">
                    <p><?= $content ?></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="gap-0 my-0 g-0 bg-dark m-0 p-1 d-flex justify-content-center align-items-center">
        <p class="fst-italic lead text-light">Copyrith@2022 By Kone Nonwa</p>
    </footer>

    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>