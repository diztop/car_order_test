<?php

namespace Manufacture\Productions\Cars\CarOptions;

use Manufacture\Productions\Cars\CarProductions;
use Manufacture\Productions\Cars\ICar;

class CarcaseType{

    public $selected_features;

    public function __construct($option, $type, $type_log){

        // processing

        $this->selected_features = CarProductions::$product_options['CarcaseType']['type'][$type][$option];

        // log

        CarProductions::logStages( $this->selected_features, $type_log);

    }

    public function printCharacteristics()
    {
        echo 'Тип кузова - '.$this->selected_features;
    }

}
