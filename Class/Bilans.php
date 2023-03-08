<?php

namespace Class;

use Config\Database;

class Bilans
{

    public static function totalOrangeMoneyDeLaJournee($date): mixed
    {

        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('
        SELECT SUM(montant_transaction) as total_orange
        FROM transactions t
        LEFT JOIN gerants g
        ON t.gerant_num = g.num_gerant
        LEFT JOIN agences a
        ON a.code_agence = g.agence_code
        WHERE op_mobile = "orange money" AND gerant_num = ? AND date_transaction = ?
        ');
        $req->execute(array($id_gerant, $date));
        return $req->fetch();
    }

    public static function totalMtnMoneyDeLaJournee($date): mixed
    {

        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('
        SELECT SUM(montant_transaction) as total_mtn
        FROM transactions t
        LEFT JOIN gerants g
        ON t.gerant_num = g.num_gerant
        LEFT JOIN agences a
        ON a.code_agence = g.agence_code
        WHERE op_mobile = "mtn money" AND gerant_num = ? AND date_transaction = ?
        ');
        $req->execute(array($id_gerant, $date));
        return $req->fetch();
    }

    public static function totalMoovMoneyDeLaJournee($date): mixed
    {

        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('
        SELECT SUM(montant_transaction) as total_moov
        FROM transactions t
        LEFT JOIN gerants g
        ON t.gerant_num = g.num_gerant
        LEFT JOIN agences a
        ON a.code_agence = g.agence_code
        WHERE op_mobile = "moov money" AND gerant_num = ? AND date_transaction = ?
        ');
        $req->execute(array($id_gerant, $date));
        return $req->fetch();
    }

    public static function totalWaveMoneyDeLaJournee($date): mixed
    {

        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('
        SELECT SUM(montant_transaction) as total_wave
        FROM transactions t
        LEFT JOIN gerants g
        ON t.gerant_num = g.num_gerant
        LEFT JOIN agences a
        ON a.code_agence = g.agence_code
        WHERE op_mobile = "wave money" AND gerant_num = ? AND date_transaction = ?
        ');
        $req->execute(array($id_gerant, $date));
        return $req->fetch();
    }

    public static function enregistrerBiLanParJour($date, $orange, $mtn, $moov, $wave, $caisse, $total)
    {
        $req = Database::getPDO()->prepare('INSERT INTO bilans SET date_bilan = ?, bilan_orange = ?, bilan_mtn = ?, bilan_moov = ?, bilan_wave = ?, caisse_jour = ?, total = ?, agence_code = ?');
        return $req->execute(array($date, $orange, $mtn, $moov, $wave, $caisse, $total, $_SESSION['code']));
    }

    public static function rechercheBilanDuneDate($date)
    {
        $req = Database::getPDO()->prepare('SELECT * FROM bilans WHERE date_bilan = ?');
        $req->execute(array($date));
        return $req->fetch(\PDO::FETCH_OBJ);
    }
}
