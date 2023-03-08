<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Page d'Administration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">





    <link href="../../../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../../../mobile_money_project/admin/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow bg-dark" aria-label="Dark offcanvas navbar">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Mobile money Administration</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php?p=gerant">Enregistrer un gerant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php?p=agence">Enregistrer une agence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=profil">Mon profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-warning text-dark text-sttart" href="#">Se deconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="#" method="get">
            <div class="form-group mb-3">
                <label for="nom-agence" class="mb-1">Nom agence</label>
                <input type="text" name="nom-agence" id="nom-agence" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="date" class="mb-1">Entrer une date</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <button type="submit" name="search" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
    <script src="../../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>