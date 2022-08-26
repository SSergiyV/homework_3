<?php

namespace classes\interfaces;

use classes\Logger;

interface Delivery {
    public function format(Logger $logger): string;
    public function deliver(Logger $logger);
}
