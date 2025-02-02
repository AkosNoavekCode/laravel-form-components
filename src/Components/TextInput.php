<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Components\Component;

class TextInput extends Component
{
    public function render(): string
    {
        return view('laravel-form-components::text-input');
    }
}
