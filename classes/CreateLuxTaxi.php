<?php

namespace classes;

use classes\interfaces\TaxiInterface;

class CreateLuxTaxi extends CreatorTaxi
{

    public function createTaxi(): TaxiInterface
    {
        return new LuxTaxi();
    }
}