<?php

namespace classes;

use classes\interfaces\AbstractLgInterface;
use classes\interfaces\AbstractSonyInterface;

class CreateTvLed implements interfaces\CreateTvInterface
{

    public function createLg(): AbstractLgInterface
    {
        return new LgLed();
    }

    public function createSony(): AbstractSonyInterface
    {
        return new SonyLed();
    }
}