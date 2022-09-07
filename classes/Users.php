<?php

namespace classes;

class Users
{
    public static function isTable(): bool {
        $query = DbConnect::pdo() -> prepare("SHOW TABLES LIKE 'users'");
        $query -> execute();
        return (bool)$query -> rowCount();
    }

    public static function createTable():void{
        $query = DbConnect::pdo() -> prepare("CREATE TABLE users (
            id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            nam TEXT(24) NOT NULL,
            surname TEXT(24) NOT NULL,
            age INT(3) NOT NULL,
            email VARCHAR(255) NOT NULL
    )");
        $query -> execute();
    }

    public static function createUser($nam, $surname, $age, $email): void {
        $query = DbConnect::pdo()->prepare(
            "INSERT INTO users (nam, surname, age, email) 
                    VALUES (:nam, :surname, :age, :email)"
        );
        $query->bindParam("nam", $nam);
        $query->bindParam("surname", $surname);
        $query->bindParam("age", $age);
        $query->bindParam("email", $email);

        $query->execute();
    }

    public static function getId(): array {
        $query = DbConnect::pdo()->prepare("SELECT id FROM users");
        $query->execute();
        return $query->fetchAll();
    }

    public static function getUserData($userID): array {
        $query = DbConnect::pdo()->prepare("SELECT * FROM users WHERE id=$userID");
        $query->execute();
        return $query->fetchAll();
    }

    public static function deleteUser($userID): void {
        $query = DbConnect::pdo()->prepare("DELETE FROM users WHERE id=$userID");
        $query->execute();
    }
}

