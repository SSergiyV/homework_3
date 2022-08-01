<?php

echo "<pre>";

error_reporting(-1);

use classes\{User, ValueObject, Test};
require_once __DIR__ . "/vendor/autoload.php";



function debug ($data) {
    echo print_r($data, 1);
}

try {
//    $color = new ValueObject(200, 200, 200);
//    $color_1 = new ValueObject(200, 200, 200);
//    $color_2 = $color -> mix (new ValueObject(200, 200, 200));
//    var_dump($color -> equals($color, $color_1));
//
//    $rgb = ValueObject::random();
//    debug($rgb);
//
//    echo $color -> getRed() . "<br>";
//    echo $color -> getGreen() . "<br>";
//    echo $color -> getBlue() . "<br>";
//
//    $user = new User(2545524, "gft@jhn.ki");
//    echo $user -> getUserData();

    $traitTest = new Test();
    echo $traitTest -> getSum();
}
catch (Exception $exception) {
    echo $exception -> getMessage();
    echo "File: " . $exception -> getFile();
    echo "<br><br>";
    echo "Line: " . $exception -> getLine();
}

