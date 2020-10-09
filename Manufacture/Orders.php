<?php

namespace Manufacture;

abstract class Orders {

    protected $product_options = [];
    public $order_client = [];
    public $client_email;

    protected function getConfiguration($config_name){
        return include __DIR__.'/Config/'.$config_name.'.php';
    }

    protected function setProductOptions($product_options){
        $this->product_options = $product_options;
    }

    public function getProductOptions(){
        return $this->product_options;
    }

    public function setOrder($client_order){
        $this->order_client = $client_order;
        $this->client_email = $client_order['client_email'];
    }

    public function getOrder(){
        return $this->order_client;
    }



}