<?php

namespace classes;

use http\Exception\InvalidArgumentException;

class Currency {

    private string $isoCode;
    const CURRENCY_NAME = array("USD", "EUR", "GBP", "CHF");

    public function __construct($isoCode) {
        $this -> setIsoCode($isoCode);

    }

    public function equals(Currency $currency): bool {
        return $this -> getIsoCode() == $currency -> getIsoCode();
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }


    public function setIsoCode($isoCode): void
    {
        if (in_array($isoCode, self::CURRENCY_NAME)) $this -> isoCode = $isoCode;
    }
}