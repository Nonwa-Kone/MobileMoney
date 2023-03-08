<?php

namespace Class\Admin;

use Config\Database;

class Pages
{
    public static function generer()
    {
        $req = Database::getPDO()->query('SELECT * FROM agences');
        $result = $req->fetchAll(\PDO::FETCH_OBJ);
        $nbpage = count($result);
        foreach ($result as $agence) {
            $page = explode(' ', $agence->nom_agence)[1];
            if (!file_exists(($page))) {
                touch($page . '.php');
            };
        };
        return;
    }

    public static function totalTransaction($code)
    {
        $req = Database::getPDO()->prepare('
            SELECT COUNT(*) as total FROM transactions t
            JOIN gerants g
            ON t.gerant_num = g.num_gerant
            JOIN agences a
            ON a.code_agence = g.agence_code
            WHERE a.code_agence = ?
        ');
        $req->execute(array($code));
        return $req->fetch();
    }

    public static function chiffreAffaire($code): mixed
    {
        $req = Database::getPDO()->prepare('
            SELECT SUM(montant_transaction) as montant FROM transactions t
            JOIN gerants g
            ON t.gerant_num = g.num_gerant
            JOIN agences a
            ON a.code_agence = g.agence_code
            WHERE a.code_agence = ?
        ');
        $req->execute(array($code));
        return $req->fetch();
    }

    public static function chiffreAffaireMoyenne($code): mixed
    {
        $req = Database::getPDO()->prepare('
            SELECT ROUND(AVG(montant_transaction)) as moyenne FROM transactions t
            JOIN gerants g
            ON t.gerant_num = g.num_gerant
            JOIN agences a
            ON a.code_agence = g.agence_code
            WHERE a.code_agence = ?
        ');
        $req->execute(array($code));
        return $req->fetch();
    }

    public static function totalClient(): mixed
    {
        $req = Database::getPDO()->query('SELECT COUNT(*) as tle_client FROM clients');
        return $req->fetch();
    }
}
