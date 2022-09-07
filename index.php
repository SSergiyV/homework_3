<?php

use classes\{CreatorTaxi, Users, DbConnect, Logger, UserOld, ValueObject, Test, User, Currency, Money,WithDateFormat,ConsoleDelivery,PatternCollection};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";

function clientCode(CreatorTaxi $creator): void {
    $creator->getTaxi();
}


clientCode(new \classes\CreateLuxTaxi());

