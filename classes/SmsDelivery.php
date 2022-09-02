<?php

namespace classes;

use classes\interfaces\DeliveryInterface;

class SmsDelivery implements DeliveryInterface {

    public function deliver($format){

        echo "Вывод формата ({$format}) в смс";

    }

}