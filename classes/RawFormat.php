<?php

namespace classes;

use classes\interfaces\FormatInterface;

class RawFormat implements FormatInterface {

    public function format(string $string): string {

        return $string;

    }


}