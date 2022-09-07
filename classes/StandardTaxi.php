<?php

namespace classes;
use classes\interfaces\TaxiInterface;

class StandardTaxi implements TaxiInterface
{

    public function modelOut()
    {
        echo "Model: WV <br>";
    }

    public function priceOut()
    {
        echo "Price: 200";
    }
}