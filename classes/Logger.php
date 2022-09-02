<?php

namespace classes;

use classes\interfaces\{DeliveryInterface, FormatInterface};

class Logger {

    public function __construct(protected FormatInterface $format, protected DeliveryInterface $delivery ) {}

    public function log(string $string)
    {
        $this->delivery->deliver($this->format->format($string));
    }

}

