<?php

namespace classes;

use classes\interfaces\AbstractLgInterface;
use classes\interfaces\AbstractSonyInterface;

class CreateTvLcd implements interfaces\CreateTvInterface
{

    public function createLg(): AbstractLgInterface
    {
        return new LgLcd();
    }

    public function createSony(): AbstractSonyInterface
    {
        return new SonyLcd;
    }
}