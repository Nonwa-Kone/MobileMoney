<?php

namespace Config;

use PDO;
use Source\Constants;

session_start();

class Database
{
    private static $pdo;

    public static function getPDO()
    {
        if (static::$pdo === null) {
            $pdo = new PDO(
                'mysql:host=' . Constants::DB_HOST . ';dbname=' . Constants::DB_NAME . ';charset=utf8',
                Constants::DB_USERNAME,
                Constants::DB_PASSWORD,
                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
            static::$pdo = $pdo;
        }
        return static::$pdo;
    }
}
