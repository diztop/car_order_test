<?php

return [

    'manager' => 'CarManager',
    'product_options' => [

        // Product configuration

        //типа (грузовые, легковые)
        //и различной конфигурации, учитывающей:
        //тип и обьем двигателя,
        //кузов,
        //трансмиссию (тип коробки и кол-во скоростей),
        //несколько комплектаций интерьєра, цвет, дополнительные опции.

        'CarType' => [
            'question' => 'Укажите тип автомобиля:',
            'log_params' => 'file',
            'type' => [ 0 =>[
                1 => 'Легковой',
                2 => 'Грузовой',
            ]],
        ],

        'EngineType' => [
            'question' => 'Укажите тип двигателя:',
            'log_params' => 'email',
            'type' => [ 1 => [
                1 => 'Дизель V6 3.0 250лс',
                2 => 'Дизель V12 6.0 500лс',
                3 => 'Бензиновой турбо 1.5 150лс',
                4 => 'Бензиновой турбо 2.5 550лс',
                6 => 'Електромотор 700лс'
            ], 2 => [
                1 => 'Дизель V12 1000лс',
                2 => 'Дизель V12 1500лс',
            ]]
        ],

        'CarcaseType' => [
            'question' => 'Укажите тип кузова:',
            'log_params' => 'email',
            'type' => [ 1 => [
                1 => 'седан',
                2 => 'хачбек',
                3 => 'унивесал',
                4 => 'кабриолет'
            ], 2 => [
                1 => 'Еврофура',
                2 => 'Jumbo',
                3 => 'Автосцепка',
                4 => 'Рефрижераторный фургон',
                5 => 'Автоцистерна'
            ]]
        ],

        'TransmissionType' => [
            'question' => 'Укажите тип трансмиссии:',
            'log_params' => 'email',
            'type' => [ 1 => [
                1 => 'механика 5',
                2 => 'механика 7',
                3 => 'автомат 7',
                4 => 'робот'
            ], 2 => [
                1 => 'автомат 12',
                2 => 'автомат 15',
                3 => 'вариатор',
            ]]
        ],

        'AdditionalOptionsType' => [
            'question' => 'Дополнительные опции через точку с запятой',
            'log_params' => 'email',
            'type' => [ 1 => [
                1 => 'салон кожа',
                2 => '20 диски',
                3 => 'круиз контроль',
                4 => 'люк',
                5 => 'цвет белый',
                6 => 'цвет черный'
            ], 2 => [
                1 => 'автоподкачка давления колес',
                2 => 'хородильник',
                3 => 'дополнительный бак на 200л',
                4 => 'цвет хаки'
            ]]
        ]
    ]
];