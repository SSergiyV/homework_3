<?php

namespace classes;

class PatternCollection
{

    public function delWord(string $text):string {

        preg_match_all("/\w+\s/", $text, $arr);

        return implode(" ", $arr[0]);

    }

    public function delWhitespace(string $text): string {

        preg_match_all("/\w+/", $text, $arr);

        return implode("", $arr[0]);

    }

    public function delLetters(string $text): string {

        preg_match_all("/\d+\,\d+\.\d+/", $text, $arr);

        return implode("", $arr[0]);

    }

    public function textInBrackets(string $text): string {

        preg_match_all("/\[(.*)\]/", $text, $arr);

        return implode("", $arr[1]);

    }

    public function delSymbol(string $text): string {

        preg_match_all("/[a-zA-Z\s]+/", $text, $arr);

        return implode("", $arr[0]);

    }
}