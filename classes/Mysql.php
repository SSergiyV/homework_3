<?php

namespace classes;
use classes\interfaces\DataBaseInterface;

class Mysql implements DataBaseInterface
{
    public function getData(): string
    {
        return 'some data from database';
    }
}