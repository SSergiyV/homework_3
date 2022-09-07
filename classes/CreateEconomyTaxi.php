<?php

namespace classes;

use classes\interfaces\TaxiInterface;

class CreateEconomyTaxi extends CreatorTaxi
{

    public function createTaxi(): TaxiInterface
    {
        return new EconomyTexi();
    }
}