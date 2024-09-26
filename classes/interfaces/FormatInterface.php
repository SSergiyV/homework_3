<?php

namespace classes\interfaces;

use classes\Logger;

interface FormatInterface {

    public function format(string $string): string;

}
