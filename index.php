<?php
use http\Exception\InvalidArgumentException;
use classes\{Users, DbConnect, Logger, UserOld, ValueObject, Test, User, Currency, Money,WithDateFormat,ConsoleDelivery,PatternCollection};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework_13</title>
</head>
<body>
    <?php if (!Users::isTable()) : ?>
        <h2>Create the "Users" table.</h2>
        <form action="action.php" method="post">
            <input name="type" type="hidden" value="createTable">
            <button type="submit">Create table</button>
        </form>
    <?php else: ?>
        <h2>The "Users" table already exists.</h2>
        <form action="action.php" method="post">
            <input name="type" type="hidden" value="createUser">

            <input name="name" type="text" placeholder="Name">
            <input name="surname" type="text" placeholder="Surname">
            <input name="age" type="number"placeholder="Age">
            <input name="email" type="text" placeholder="Email">
            <button type="submit">Create user</button>
        </form>
    <?php endif ?>
    <?php

    $res = Users::getId();
    $userId = "";

    for ($i = 0; $i < count($res); $i++) {
        $userId = $res[$i]["id"];
        echo "User ID: " . $userId .  "<form action=action.php method="."post".">
            <input name="."type"." type="."hidden"." value="."getUserData".">
            
            <input name="."userID"." type="."hidden"." value=". $res[$i]["id"] .">
            <button type="."submit".">Get user data</button>
        </form>" . "<br>";
        echo "<form action=action.php method="."post".">
            <input name="."type"." type="."hidden"." value="."deleteUser".">
            
            <input name="."userID"." type="."hidden"." value=". $res[$i]["id"] .">
            <button type="."submit".">Delete user</button>
        </form>" . "<br>";
    }
    ?>
</body>
</html>







