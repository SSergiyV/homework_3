<?php

namespace classes;

class LuxTaxi implements interfaces\TaxiInterface
{

    public function modelOut()
    {
        echo "Model: Bugatti <br>";
    }

    public function priceOut()
    {
        echo "Price: 500";
    }
}