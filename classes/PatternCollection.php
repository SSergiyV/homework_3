<?php

namespace classes;

class DeleteLastWord
{

    public function delWord(string $text):string {

        preg_match_all("/\w+\s/", $text, $arr);

        return implode(" ", $arr[0]);

    }

    public function delWhitespace(string $text): string {

        preg_match_all("/\w+\s/", $text, $arr);

        return implode(" ", $arr[0]);

    }
}