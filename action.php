<?php
require_once __DIR__ . "/vendor/autoload.php";
use classes\Users;


if (!empty($_POST["type"])) {
    switch ($_POST["type"]) {
        case "createTable": {
            Users::createTable();
        } break;

        case "createUser": {
            Users::createUser(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["surname"]),htmlspecialchars($_POST["age"]),htmlspecialchars($_POST["email"]));
        } break;

        case "getUserData": {
            $userID = $_POST["userID"];
            $userIdRes = Users::getUserData(htmlspecialchars($userID));

            echo "Name: " . $userIdRes[0]["nam"] . "<br>" .
                "Surname: " . $userIdRes[0]["surname"] . "<br>" .
                "Age: " . $userIdRes[0]["age"] . "<br>" .
                "Email: " . $userIdRes[0]["email"];

        } break;

        case "deleteUser": {
            $userID = $_POST["userID"];
            Users::deleteUser(htmlspecialchars($userID));
        } break;
    }
}