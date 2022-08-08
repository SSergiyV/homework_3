<?php

echo "<pre>";

error_reporting(-1);

spl_autoload_register(function ($class_name) {
    $path = __DIR__ . "/" . str_replace("\\", "/", $class_name) . ".php";

    if (!file_exists($path)) {
        throw new Exception("Class {$class_name} doesn't exists in {$path} path");
    }
    require_once $path;
});


use classes\{UserOld, ValueObject, Test, User, Currency, Money};
//require_once __DIR__ . "/vendor/autoload.php";



function debug ($data) {
    echo print_r($data, 1);
}

try {
    $currency = new Currency("USD");
    echo $currency -> getIsoCode();
}
catch (Exception $exception) {
    echo $exception -> getMessage();
    echo "File: " . $exception -> getFile();
    echo "<br><br>";
    echo "Line: " . $exception -> getLine();
}

