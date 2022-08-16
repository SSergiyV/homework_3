<?php

namespace classes;

use http\Exception\InvalidArgumentException;

class Currency {

    private string $isoCode;
    const CURRENCY_NAME = array("USD", "EUR", "GBP", "CHF");

    public function __construct($isoCode) {
        $this -> isoCode = $isoCode;
        $this -> equals();
    }

    public function equals(): bool {
        if (!in_array($this -> isoCode, self::CURRENCY_NAME)) {
            throw new InvalidArgumentException(false);
        }
        return true;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode(string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }
}