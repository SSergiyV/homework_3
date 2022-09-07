<?php

namespace classes;

use classes\interfaces\TaxiInterface;

abstract class CreatorTaxi
{
    abstract public function createTaxi(): TaxiInterface;

    public function getTaxi():void {
        $taxi = $this->createTaxi();
        $taxi->modelOut();
        $taxi->priceOut();
    }

}