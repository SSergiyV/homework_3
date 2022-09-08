<?php


use classes\{CreateTvLed, CreateTvLcd, Controller, interfaces\CreateTvInterface, Mysql};

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";

function clientCode(CreateTvInterface $creator): void {
    $lg = $creator->createLg();
    $sony = $creator->createSony();
    echo $lg->lgOut();
    echo $sony->sonyOut();
}


clientCode(new CreateTvLcd());
clientCode(new CreateTvLed());



