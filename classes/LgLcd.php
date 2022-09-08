<?php

namespace classes;

class LgLcd implements interfaces\AbstractLgInterface
{

    public function lgOut(): string
    {
        return "LG LCD <br>";
    }
}