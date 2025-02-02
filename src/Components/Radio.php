<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Components\Component;

class Radio extends Component
{
    public function __construct
    (
        public string $name,
        public string $label
    ){
        $this->id = $this->id();
    }
}
