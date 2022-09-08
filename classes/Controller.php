<?php

namespace classes;

use classes\interfaces\DataBaseInterface;

class Controller
{
    private $adapter;

    public function __construct(DataBaseInterface $dataBase)
    {
        $this->adapter = $dataBase;
    }

    function getData(): string
    {
        return $this->adapter->getData();

    }
}