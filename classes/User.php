<?php

namespace classes;

use Exception;

class UserException extends Exception {}

class User {

    public static int $id = 0;
    private string $password;
    private string $email;

    /**
     * @throws Exception
     */
    public function __construct($password, $email) {
        self::$id++;
        $this -> setPassword($password);
        $this -> setEmail($email);
    }

    public function getUserData(): string {
        return "<br>ID: " . self::$id . "<br><br>Email: {$this -> email}<br>";
    }

    /**
     * @param string $password
     * @throws Exception
     */
    public function setPassword(string $password): void
    {
        if (strlen($password) > 8) {
            throw new Exception("<br>Invalid value<br><br>");
        }
        $this->password = $password;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}