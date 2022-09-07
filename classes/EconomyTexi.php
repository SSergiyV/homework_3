<?php

namespace classes;

use classes\interfaces\TaxiInterface;

class EconomyTexi implements TaxiInterface
{

    public function modelOut()
    {
        echo "Model: Lanos <br>";
    }

    public function priceOut()
    {
        echo "Price: 100";
    }
}