<?php

echo "<pre>";

error_reporting(-1);

use http\Exception\InvalidArgumentException;
use classes\{Logger, UserOld, ValueObject, Test, User, Currency, Money};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";


function debug ($data): void {
    echo print_r($data, 1);
}

try {
    $money = new Money(12, new Currency("EUR"));
    $money1 = new Money(123, new Currency("EUR"));

    dd($money -> add($money1));

}catch (InvalidArgumentException $exception) {
    echo $exception -> getMessage();
}