<?php

namespace classes;

use http\Exception\InvalidArgumentException;

class Money {

    private int|float $amount;
    private Currency $currency;

    public function __construct($amount, Currency $currency) {
        $this -> setAmount($amount);
        $this -> setCurrency($currency);
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
        return $this -> currency;
    }

    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool {
        return $this -> amount == $money -> amount && $this -> getCurrency() -> equals($money -> getCurrency());
    }

    /**
     * @param Money $money
     * @return int|float
     */
    public function add(Money $money):int|float {
        if (!$this -> getCurrency() -> equals($money -> getCurrency())) {
            throw new InvalidArgumentException('error');
        }
        return $this -> amount + $money -> amount;
    }

}