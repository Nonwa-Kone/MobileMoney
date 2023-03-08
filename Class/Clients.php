<?php

namespace Class;

use Config\Database;
use PDOStatement;

class Clients
{
    public function __construct(
        private $nom,
        private $prenom,
        private $contact
    ) {
    }

    public static function add(array $value)
    {
        $sql = Database::getPDO()->prepare('SELECT * FROM clients WHERE nom_client = ? AND prenom_client = ? AND tel_client = ?');
        $sql->execute($value);
        if ($sql->rowCount() == 0) {
            $req = Database::getPDO()->prepare('INSERT INTO clients SET nom_client = ?, prenom_client = ?, tel_client = ?');
            if ($req->execute($value)) {
                return '<p class="alert alert-success">Client enregistré</p>';
            } else {
                return '<p class="alert alert-danger">Votre enregistrement à echoué</p>';
            }
        } else {
            return '<p class="alert alert-danger">Client existe déjà</p>';
        }
    }
}
