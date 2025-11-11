<?php

use Akosnoavek\LaravelFormComponents\Components\FormGroup;
use Akosnoavek\LaravelFormComponents\Components\Radio;
use Akosnoavek\LaravelFormComponents\Components\Range;
use Akosnoavek\LaravelFormComponents\Components\Select;
use Akosnoavek\LaravelFormComponents\Components\Submit;
use Akosnoavek\LaravelFormComponents\Components\Checkbox;
use Akosnoavek\LaravelFormComponents\Components\Textarea;
use Akosnoavek\LaravelFormComponents\Components\FormInput;


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
            'view'  => 'form-components::' . $framework . '.form-input',
            'class' => FormInput::class,
        ],

        'radio' => [
            'view'  => 'form-components::' . $framework . '.radio',
            'class' => Radio::class,
        ],

        'range' => [
            'view'  => 'form-components::' . $framework . '.range',
            'class' => Range::class,
        ],

        'form-group' => [
            'view'  => 'form-components::' . $framework . '.form-group',
            'class' => FormGroup::class,
        ],

        'select' => [
            'view'  => 'form-components::' . $framework . '.select',
            'class' => Select::class,
        ],

        'submit' => [
            'view'  => 'form-components::' . $framework . '.submit',
            'class' => Submit::class,
        ],

        'textarea' => [
            'view'  => 'form-components::' . $framework . '.textarea',
            'class' => Textarea::class,
        ],
    ],

    //Api endpoint with the related model to fetch on the select component
    'api' => [
        'example.route' => '\App\Models\ExampleClass'
    ]
];
