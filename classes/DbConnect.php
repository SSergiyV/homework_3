<?php

namespace classes;

use PDO;
require_once "db_config/db_config.php";

class DbConnect {

    private static PDO|null $pdo = null;

    public static function pdo(): PDO {

        if (is_null(static::$pdo)) {
            self::$pdo = new PDO(DSN, DB_USER, DB_PASSWORD, DB_OPTS);
        }
        return self::$pdo;
    }
}