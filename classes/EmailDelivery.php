<?php

namespace classes;

use classes\interfaces\DeliveryInterface;

class EmailDelivery implements DeliveryInterface {

    public function deliver($format): void {

        echo "Вывод формата ({$format}) по имейл";

    }

}