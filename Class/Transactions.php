<?php

namespace Class;

use Config\Database;
use PDO;
use stdClass;

class Transactions
{
    private static $idTransaction;

    public static function query($expediteur, $destinateur, $date): stdClass|array
    {
        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('
        SELECT * FROM transactions t 
        RIGHT JOIN clients c 
        ON c.num_client = t.client_num 
        LEFT JOIN gerants g
        ON g.num_gerant = t.gerant_num
        LEFT JOIN agences a
        ON a.code_agence = g.agence_code
        WHERE c.tel_client = ? AND t.numero_destinateur = ? AND t.date_transaction = ? AND g.num_gerant = ?;
       
        ');
        $req->execute(array($expediteur, $destinateur, $date, $id_gerant));
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function listeTransactionParJour($value): mixed
    {
        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('SELECT * FROM transactions WHERE date_transaction = ? AND gerant_num = ?');
        $req->execute(array($value, $id_gerant));
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public static function nombreDeTransactionParJour($value): mixed
    {
        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('SELECT COUNT(id_transaction) as nombre FROM transactions WHERE date_transaction = ? AND gerant_num = ?');
        $req->execute(array($value, $id_gerant));
        return $req->fetch();
    }

    public static function montantTotalDesTransactionParJour($value): mixed
    {
        $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
        $gerant->execute(array($_SESSION['code']));
        $gerant = $gerant->fetch();
        $id_gerant = $gerant->num_gerant;

        $req = Database::getPDO()->prepare('SELECT SUM(montant_transaction) as montant FROM transactions WHERE date_transaction = ? AND gerant_num = ?');
        $req->execute(array($value, $id_gerant));
        return $req->fetch();
    }

    public static function enregistrerUneTransaction(string $expediteur, string $destinateur, string $operation, string $operateur, string|int $montant, string $status, string $date): mixed
    {
        $verification = Database::getPDO()->prepare('SELECT num_client FROM clients WHERE tel_client = ?');
        $verification->execute(array($expediteur));
        if ($verification->rowCount() > 0) {
            $client = $verification->fetch();
            $id_client = $client->num_client;

            $gerant = Database::getPDO()->prepare('SELECT num_gerant FROM gerants WHERE agence_code = ?');
            $gerant->execute(array($_SESSION['code']));
            $gerant = $gerant->fetch();
            $id_gerant = $gerant->num_gerant;

            $req = Database::getPDO()->prepare('INSERT INTO transactions SET id_transaction = null, numero_destinateur = ?, date_transaction = ?, type_transaction = ?, op_mobile = ?, montant_transaction = ?, statu_transaction = ?, gerant_num = ?, client_num = ?');
            $sql = $req->execute(array(
                $destinateur,
                $date,
                $operation,
                $operateur,
                $montant,
                $status,
                $id_gerant,
                $id_client
            ));
            if ($sql) {
                return '<p class="alert alert-success">Transaction enregistré</p><a href="#" target="_blank"></a>
                ';
            } else {
                return '<p class="alert alert-danger">Enregistrement de la transaction à echouer</p>';
            }
        } else {
            return '<p class="alert alert-danger">Le client n\'est pas enregistré, vous devez enregistrer le client d\'abord</p>';
        }
    }

    public static function recu(): mixed
    {
        $req = Database::getPDO()->prepare('SELECT * FROM transactions WHERE id_transaction = ?');
        $req->execute(array(static::$idTransaction));
        return $req->fetch();
    }
}
