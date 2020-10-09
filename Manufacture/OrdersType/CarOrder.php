<?php

namespace Manufacture\OrdersType;

use Manufacture\Orders;

class CarOrder extends Orders {
    public function __construct(){
        $config = $this->getConfiguration('car_config');
        $this->setProductOptions($config['product_options']);
    }
}