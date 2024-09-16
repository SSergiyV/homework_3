<?php

namespace classes;

class Money {

    private int|float $amount;
    private Currency $currency;

    public function __construct($amount, $currency) {
        $this -> amount = $amount;
        $this -> currency = $currency;
    }

    public function equals() {

    }

    /**
     * @return float|int
     */
    public function getAmount(): float|int
    {
        return $this->amount;
    }

    /**
     * @param float|int $amount
     */
    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

}