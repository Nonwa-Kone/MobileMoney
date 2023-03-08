<?php
require '../Controllers/controllersLogin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <section id="wrapper">
        <div class="container">
            <div class="row">
                <h2>Se connecter</h2>
                <div id="serveur">
                    <span id="response-serveur"><?= $errorMsg ?><?= $successMsg ?></span>
                </div>
                <form class="form" id="form" method="POST">
                    <div class="form-group mb-3">
                        <label for="nom-utilisateur" class="mb-2">Nom utilisateur</label>
                        <input type="text" name="nom-utilisateur" id="nom-utilisateur" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="pass-utilisateur" class="mb-2">Mot de passe</label>
                        <input type="password" name="pass-utilisateur" id="pass-utilisateur" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </form>
            </div>
        </div>
    </section>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>