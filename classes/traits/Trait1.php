<?php

namespace classes\traits;

trait Trait1 {
    use Trait2, Trait3 {
        Trait3::test as test3;
        Trait2::test as test2;
    }
    public function test(): int {
        return 1;
    }
}
