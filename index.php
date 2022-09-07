<?php

use classes\{Controller, Mysql};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";

//function clientCode(CreatorTaxi $creator): void {
//    $creator->getTaxi();
//}
//
//
//clientCode(new \classes\CreateLuxTaxi());

$controller = new Controller(new Mysql());
echo $controller ->getData();