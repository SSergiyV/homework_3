<?php

namespace classes;

class SonyLcd implements interfaces\AbstractSonyInterface
{

    public function sonyOut(): string
    {
        return "Sony LCD <br>";
    }
}