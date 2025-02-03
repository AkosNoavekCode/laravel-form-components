<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Components\Component;

class FormGroup extends Component
{
    public function __construct
    (
        public string $name,
        public string $label,
        public bool $inline
    ){
        $this->id = $this->id();
    }
}
