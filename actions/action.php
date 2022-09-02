<?php

use classes\DbConnect;

require_once "db_config/db_config.php";

function isTable(): bool {
    $query = DbConnect::pdo() -> prepare("SHOW TABLES LIKE 'users'");
    $query -> execute();
    return (bool)$query -> rowCount();
}

function createTable() {
    $query = DbConnect::pdo() -> prepare("CREATE TABLE 'users' (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nam TEXT(24) NOT NULL,
        surname TEXT(24) NOT NULL,
        age INT(3) NOT NULL,
        email VARCHAR(255) NOT NULL
)");
    $query -> execute();

}function createT() {
    $query = DbConnect::pdo() -> prepare("SELECT * FROM users");
    $query -> execute();
    dd($query -> fetchAll());
}
