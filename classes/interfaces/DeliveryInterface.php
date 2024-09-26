<?php

namespace classes\interfaces;

use classes\Logger;

interface DeliveryInterface {

    public function deliver(string $format);

}
