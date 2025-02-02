<?php

use Akosnoavek\LaravelFormComponents\Components\Radio;
use Akosnoavek\LaravelFormComponents\Components\Range;
use Akosnoavek\LaravelFormComponents\Components\Submit;
use Akosnoavek\LaravelFormComponents\Components\Checkbox;
use Akosnoavek\LaravelFormComponents\Components\Textarea;
use Akosnoavek\LaravelFormComponents\Components\TextInput;


return [
    'prefix' => '',

    'frontend' => $framework = 'bootstrap',

    'use_eloquent_date_casting' => false,

    /** bool | string */
    'default_wire' => false,

    'components' => [
       'checkbox' => [
            'view'  => 'form-components::' . $framework . '.checkbox',
            'class' => Checkbox::class,
       ],

        'text-input' => [
            'view'  => 'form-components::'.$framework.'.text-input',
            'class' => TextInput::class,
        ],

       'radio' => [
           'view'  => 'form-components::'.$framework.'.radio',
           'class' => Radio::class,
       ],

       'range' => [
           'view'  => 'form-components::'.$framework.'.range',
           'class' => Range::class,
       ],

    //    'form-select' => [
    //        'view'  => 'form-components::{framework}.form-select',
    //        'class' => Components\FormSelect::class,
    //    ],

       'form-submit' => [
           'view'  => 'form-components::'.$framework.'.form-submit',
           'class' => Submit::class,
       ],

       'textarea' => [
           'view'  => 'form-components::'.$framework.'.textarea',
           'class' => Textarea::class,
       ],
    ],
];
