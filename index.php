<?php
use http\Exception\InvalidArgumentException;
use classes\{Logger, UserOld, ValueObject, Test, User, Currency, Money,WithDateFormat,ConsoleDelivery};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";
require_once "actions/action.php";


$logger = new Logger(new WithDateFormat(), new ConsoleDelivery());
$logger1 = new Logger(new \classes\RawFormat(), new \classes\SmsDelivery());
$logger2 = new Logger(new \classes\WithDateAndDetailsFormat(), new \classes\EmailDelivery());
$logger2->log("");





