<?php

echo "<pre>";

error_reporting(-1);

use classes\{UserOld, ValueObject, Test, User};
require_once __DIR__ . "/vendor/autoload.php";



function debug ($data) {
    echo print_r($data, 1);
}

try {
    $user = new User();
    $user -> setName("Nick");
    $user -> setAge(20);
    echo $user -> getAll();
}
catch (Exception $exception) {
    echo $exception -> getMessage();
    echo "File: " . $exception -> getFile();
    echo "<br><br>";
    echo "Line: " . $exception -> getLine();
}

