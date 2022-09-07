<?php

namespace classes;

use classes\interfaces\DeliveryInterface;

class ConsoleDelivery implements DeliveryInterface {

    public function deliver($format) {

        echo "Вывод формата ({$format}) в консоль";

    }

}