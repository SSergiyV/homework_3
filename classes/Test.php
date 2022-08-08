<?php

namespace classes;

use classes\traits;
use classes\traits\Trait1;

class Test {
    use Trait1;

    public function getSum(): int {
       return ($this -> test() + $this -> test2() + $this -> test3());
    }
}