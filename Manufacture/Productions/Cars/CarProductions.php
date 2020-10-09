<?php

namespace Manufacture\Productions\Cars;

use Manufacture\Productions\Cars\ICar;
use Manufacture\Orders;

class CarProductions{

    public static $product;
    public static $order;
    public static $product_options;

    public static function factory(Orders $order){

        self::$product_options = $order->getProductOptions();
        self::$order = $order->getOrder();

        echo 'Производство получило заказ! Начинаем сборку!'.PHP_EOL;

        foreach (self::$order['product_options'] as $key => $value){

            $type = self::$order['product_type'];
            $type_log = self::$product_options['AdditionalOptionsType']['log_params'];

            $class = 'Manufacture\\Productions\\Cars\\CarOptions\\' . $key;
            self::$product[$key] = new $class($value, $type, $type_log);
        }

        echo 'Зборку закончили!'.PHP_EOL.'===================='.PHP_EOL;

        return self::$product;
    }

    public static function logStages($fields, $log_type){

        switch($log_type){
            case 'email':
                echo 'Log stage: Save in file '.$fields.PHP_EOL;
                break;
            case 'file':
                echo 'Log stage: Send email '.$fields.PHP_EOL;
                break;
        }
    }
}