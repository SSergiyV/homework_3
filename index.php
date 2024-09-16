<?php

echo "<pre>";

error_reporting(-1);

use classes\{UserOld, ValueObject, Test, User, Currency, Money};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";


function debug ($data): void {
    echo print_r($data, 1);
}

try {
    $pdo = new PDO(DSN, DB_USER, DB_PASSWORD, DB_OPTS);

    $query = $pdo -> prepare("SELECT * FROM cars");

    $query -> execute();

    dd($query -> fetchAll());

}catch (PDOException $exception) {
    echo $exception -> getMessage();
    dd($exception);
}