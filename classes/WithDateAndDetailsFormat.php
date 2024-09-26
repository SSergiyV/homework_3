<?php

namespace classes;

use classes\interfaces\FormatInterface;

class WithDateAndDetailsFormat implements FormatInterface {

    public function format(string $string): string {

        return date('Y-m-d H:i:s') . $string . ' - With some details';

    }

}