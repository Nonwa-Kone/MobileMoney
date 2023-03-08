<?php

namespace Class;

use PDO;
use Config\Database;

class Agences
{
    private $codeAgence;
    private $nomAgence;

    public static function url()
    {
        return explode('?', $_SERVER['REQUEST_URI'])[1];
    }

    public static function listeDesAgences(): mixed
    {
        $req = Database::getPDO()->query('SELECT * FROM agences');
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function enregistrer($value)
    {
        $verifierAgence = Database::getPDO()->prepare('SELECT nom_agence FROM agences WHERE nom_agence = ?');
        $verifierAgence->execute(array($value[1]));

        if ($verifierAgence->rowCount() == 0) {
            $req = Database::getPDO()->prepare('INSERT INTO agences SET code_agence = ?, nom_agence = ?');
            if ($req->execute($value)) {
                return '<p class="alert alert-success">Agence enregistré</p>';
            } else {
                return '<p class="alert alert-danger">Enregistrement à echouer</p>';
            }
        } else {
            return '<p class="alert alert-success">Agence existe déjà</p>';
        }
    }

    public static function nomAgence($code)
    {
        $req = Database::getPDO()->prepare('SELECT nom_agence FROM agences WHERE code_agence = ?');
        $req->execute(array($code));
        return $req->fetch();
    }
}
