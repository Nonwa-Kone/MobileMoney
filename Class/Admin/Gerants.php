<?php

namespace Class\Admin;

use Config\Database;

class Gerants
{

    public static function enregistrer($nom, $prenom, $contact, $agence)
    {
        $verifier = Database::getPDO()->prepare('SELECT code_agence FROM agences WHERE nom_agence = ?');
        $verifier->execute(array($agence));

        $sql = Database::getPDO()->prepare('SELECT tel_gerant FROM gerants WHERE tel_gerant = ?');
        $sql->execute(array($contact));

        if ($sql->rowCount() > 0) {
            $idAgence = $verifier->fetch();
            $req = Database::getPDO()->prepare('INSERT gerants SET nom_gerant = ?, prenom_gerant = ?, tel_gerant = ?, agence_code = ?');
            $reponseServeur = $req->execute(array($nom, $prenom, $contact, $idAgence->code_agence));
            if ($reponseServeur) {
                return '<p class="alert alert-success">Gerant enregistré</p>';
            } else {
                return '<p class="alert alert-danger">Enregistrement à echouer</p>';
            }
        } else {
            return '<p class="alert alert-success">Agence existe déjà</p>';
        }
    }
}
