<?php

error_reporting(-1);

require_once 'classes/ValueObject.php';
require_once 'classes/User.php';

function debug ($data) {
    echo '<pre>' . print_r($data, 1) . '<pre>';
}

try {
    $color = new ValueObject(200, 200, 200);
    $color_1 = new ValueObject(200, 200, 200);
    $color_2 = $color -> mix (new ValueObject(200, 200, 200));
    var_dump($color -> equals($color, $color_1));
    echo "<br>";
    $rgb = ValueObject::random();
    debug($rgb);
    echo "<br>";
    echo $color -> getRed();
    echo "<br>";
    echo $color -> getGreen();
    echo "<br>";
    echo $color -> getBlue();
    echo "<br>";
    $user = new User(2545524, "gft@jhn.ki");
    echo $user -> getUserData();
}
catch (Exception $exception) {
    echo $exception -> getMessage();
    echo "File: " . $exception -> getFile();
    echo "<br><br>";
    echo "Line: " . $exception -> getLine();
}

