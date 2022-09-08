<?php

namespace classes;

class LgLed implements interfaces\AbstractLgInterface
{

    public function lgOut(): string
    {
        return "LG LED <br>";
    }
}