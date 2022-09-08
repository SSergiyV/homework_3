<?php

namespace classes;

class SonyLed implements interfaces\AbstractSonyInterface
{

    public function sonyOut(): string
    {
        return "Sony LED <br>";
    }
}