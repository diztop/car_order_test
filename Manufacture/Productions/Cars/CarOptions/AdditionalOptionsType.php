<?php

namespace Manufacture\Productions\Cars\CarOptions;

use Manufacture\Productions\Cars\CarProductions;
use Manufacture\Productions\Cars\ICar;

class AdditionalOptionsType implements ICar{

    public $selected_features;

    public function __construct($option, $type, $type_log){

        // processing

        foreach ($option as $item){
            if(!empty($item)){

                $this->selected_features[] = CarProductions::$product_options['AdditionalOptionsType']['type'][$type][$item];
            }
        }

        // log

        CarProductions::logStages(implode(';', $this->selected_features), $type_log);
    }

    public function printCharacteristics()
    {
        echo 'Дополнительные опции - '. implode(';  ', $this->selected_features);
    }

}
