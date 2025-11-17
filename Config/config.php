<?php

use Akosnoavek\LaravelFormComponents\Components\FormCheckbox;
use Akosnoavek\LaravelFormComponents\Components\FormGroup;
use Akosnoavek\LaravelFormComponents\Components\FormRadio;
use Akosnoavek\LaravelFormComponents\Components\Range;
use Akosnoavek\LaravelFormComponents\Components\FormSelect;
use Akosnoavek\LaravelFormComponents\Components\Submit;
use Akosnoavek\LaravelFormComponents\Components\FormInput;
use Akosnoavek\LaravelFormComponents\Components\FormTextarea;

return [
  'prefix' => '',

  'frontend' => $framework = 'bootstrap',

  'use_eloquent_date_casting' => false,

  /** bool | string */
  'default_wire' => false,

  'components' => [
    'form-checkbox' => [
      'view'  => 'form-components::' . $framework . '.form-checkbox',
      'class' => FormCheckbox::class,
    ],

    'form-input' => [
      'view'  => 'form-components::' . $framework . '.form-input',
      'class' => FormInput::class,
    ],

    'form-radio' => [
      'view'  => 'form-components::' . $framework . '.form-radio',
      'class' => FormRadio::class,
    ],

    'range' => [
      'view'  => 'form-components::' . $framework . '.range',
      'class' => Range::class,
    ],

    'form-group' => [
      'view'  => 'form-components::' . $framework . '.form-group',
      'class' => FormGroup::class,
    ],

    'form-select' => [
      'view'  => 'form-components::' . $framework . '.form-select',
      'class' => FormSelect::class,
    ],

    'submit' => [
      'view'  => 'form-components::' . $framework . '.submit',
      'class' => Submit::class,
    ],

    'form-textarea' => [
      'view'  => 'form-components::' . $framework . '.form-textarea',
      'class' => FormTextarea::class,
    ],
  ],

  //Api endpoint with the related model to fetch on the select component
  'api' => [
    'example.route' => '\App\Models\ExampleClass'
  ]
];
