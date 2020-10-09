<?php

namespace Manufacture\Managers;

use Manufacture\Orders;
use Manufacture\SalesManager;


class CarManager extends SalesManager {

    public function configuratorClientOrder(Orders $order):Orders
    {

        $client_order = $this->getClientOrderDisplayUI($order->getProductOptions());
        $order->setOrder($client_order);

        return $order;

    }

    public function getClientOrderDisplayUI(array $order_options):array {

        $subtype = 0;
        $order = [];

        $order['client_email'] = $this->getClientEmailUI();

        foreach($order_options as $key => $value){

            $question = $value['question'].PHP_EOL;

            if(isset($value['type'][0])){
                foreach ($value['type'][0] as $k => $item){
                    $question .= $k.'-'.$item.';'.PHP_EOL;
                }
                $subtype = readline ($question);

                while(empty($subtype)){
                    $subtype = (int) readline ($question);
                }

                $order['product_type'] = $subtype;
                $order['product_options'][$key] = $subtype;
                continue;
            }

            foreach ($value['type'][$subtype] as $k => $item){
                $question .= $k.'-'.$item.';'.PHP_EOL;
            }

            if($key == 'AdditionalOptionsType'){
                $readline = 0;
                while(!is_array($readline)){
                    $readline = readline ($question);
                    $readline = explode(';', trim($readline));
                }
            }else{
                $readline = 0;
                while(empty($readline)){
                    $readline = (int) readline ($question);
                }

            }


            $order['product_options'][$key] = $readline;
        }

        echo 'Cпасибо за ваш заказ! Передаю заказ на производство!'.PHP_EOL.PHP_EOL;

        return $order;
    }

    public function responseClientOrder(Orders $client_order){
        return $client_order->client_email;

    }

}