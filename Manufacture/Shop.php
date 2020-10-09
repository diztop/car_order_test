<?php

namespace Manufacture;

use Manufacture\Productions\Cars\CarProductions;

class Shop
{

    public $manager;
    private $car_warehouse = [];

    public function __construct(SalesManager $manager)
    {
        $this->manager = $manager;
    }

    public function setProductToCarWarehouse($product, Orders $order){
       if($product && $product){

           $this->car_warehouse[$order->client_email] = $product;

           echo 'Передали автомобиль на склад магазина.'.PHP_EOL.'===================='.PHP_EOL;
           return true;
       }
       return false;
    }

    public function getProductFromCarWarehouse($client_email){
        return $this->car_warehouse[$client_email];
    }

    public function checkCarProduct($car){

        echo 'Проверка характеристик автомобиля'.PHP_EOL.'===================='.PHP_EOL;

        foreach($car as $item){
            $item->printCharacteristics();
            echo PHP_EOL;
        }

        return $car;
    }

    public function transferCarProtuctToClient($car){

        echo '===================='.PHP_EOL.'Автомобиль передан клиенту! Клиент доволен ;)'.PHP_EOL;
        return $car;
    }

}
