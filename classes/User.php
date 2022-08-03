<?php

namespace classes;

use Exception;

class User {

    private string $name;
    private int $age;
    private string $email;

    /**
     * @throws Exception
     */
    public function __call(string $name, array $arguments) {
        if (!method_exists($this, $name)) {
            throw new Exception("The" . $name . "method does not exist.");
        }
        call_user_func_array([$this, $name], $arguments);
    }

    private function setName($name): void {
        $this -> name = $name;
    }

    private function setAge($age): void {
        $this -> age = $age;
    }

    public function getAll(): string {
        return "Name: " . $this -> name . "<br>" . "Age: " . $this -> age;
    }
}