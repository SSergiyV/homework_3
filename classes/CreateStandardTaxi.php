<?php

namespace classes;

use classes\interfaces\TaxiInterface;

class CreateStandardTaxi extends CreatorTaxi
{

    public function createTaxi(): TaxiInterface
    {
        return new StandardTaxi();
    }
}