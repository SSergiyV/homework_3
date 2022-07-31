<?php

echo "<pre>";

error_reporting(-1);

require_once "classes/User.php";
require_once "classes/ValueObject.php";

//use classes\{User, ValueObject};
//require_once __DIR__ . "/vendor/autoload.php";

function debug ($data) {
    echo print_r($data, 1);
}

try {
    $color = new ValueObject(200, 200, 200);
    $color_1 = new ValueObject(200, 200, 200);
    $color_2 = $color -> mix (new ValueObject(200, 200, 200));
    var_dump($color -> equals($color, $color_1));

    $rgb = ValueObject::random();
    debug($rgb);

    echo $color -> getRed();
    echo $color -> getGreen();
    echo $color -> getBlue();
    $user = new User(2545524, "gft@jhn.ki");
    echo $user -> getUserData();
}
catch (Exception $exception) {
    echo $exception -> getMessage();
    echo "File: " . $exception -> getFile();
    echo "<br><br>";
    echo "Line: " . $exception -> getLine();
}

