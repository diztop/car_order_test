<?php

namespace Manufacture;
use Manufacture\Orders;

abstract class SalesManager{

    abstract public function configuratorClientOrder(Orders $order):Orders;

    abstract public function getClientOrderDisplayUI(array $order_options):array;

    public function getClientEmailUI(){
        while(empty($email)){
            $email = readline ('Укажите пожалуйста ваш емейл:');
        }
        return $email;
    }

}