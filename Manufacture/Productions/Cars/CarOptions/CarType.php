<?php

namespace Manufacture\Productions\Cars\CarOptions;

use Manufacture\Productions\Cars\CarProductions;
use Manufacture\Productions\Cars\ICar;

class CarType implements ICar {

    public $selected_features;

    public function __construct($option, $type, $type_log){

        // processing

        $this->selected_features = CarProductions::$product_options['CarType']['type'][0][$option];

        // log

        CarProductions::logStages($this->selected_features, $type_log);

    }

    public function printCharacteristics()
    {
        echo 'Автомобиль - '.$this->selected_features;
    }

}