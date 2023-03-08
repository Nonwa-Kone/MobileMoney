<?php

// session_start();

use Config\Database;

require '../vendor/autoload.php';

$errorMsg = '';
$successMsg = '';

if (isset($_POST['nom-utilisateur'], $_POST['pass-utilisateur'])) {
    if (!empty($_POST['nom-utilisateur']) and empty(!$_POST['pass-utilisateur'])) {
        $nomUtilisateur = htmlentities($_POST['nom-utilisateur']);
        $passUtilisateur = htmlentities($_POST['pass-utilisateur']);

        $req = Database::getPDO()->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
        $req->execute(array($nomUtilisateur));

        if ($req->rowCount() > 0) {
            $result = $req->fetch();
            if (password_verify($passUtilisateur, $result->password)) {
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $result->id;
                $_SESSION['pseudo'] = $result->pseudo;
                $_SESSION['password'] = $result->password;
                $_SESSION['code'] = $result->codeagence;
                // var_dump($_SESSION['code'], $_SESSION['pseudo']);
                // $_SESSION['email'] = $infoClient['email'];

                header('Location: index.php?p=home');
            } else {
                $errorMsg = 'Mot de passe incorrect!';
            }
        } else {
            $errorMsg = 'Nom utilisateur n\'existe pas';
        }
    } else {
        $errorMsg = "Vous devez renseigné tous les champs";
    }
}
