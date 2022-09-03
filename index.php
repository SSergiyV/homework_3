<?php
use http\Exception\InvalidArgumentException;
use classes\{Logger, UserOld, ValueObject, Test, User, Currency, Money,WithDateFormat,ConsoleDelivery,PatternCollection};
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/db_config/db_config.php";
require_once "actions/action.php";


$patternColl = new PatternCollection();
echo $patternColl->delWord("The quick brown fox")."<br>";
echo $patternColl->delWhitespace("The quick brown fox")."<br>";
echo $patternColl->delLetters("$123,34.00A")."<br>";
echo $patternColl->textInBrackets("The quick brown [fox]")."<br>";
echo $patternColl->delSymbol('abcde$ddfd @abcd )der]')."<br>";






