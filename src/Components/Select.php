<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Components\Component;

class Select extends Component
{
    public function __construct
    (
        public string $name,
        public mixed $value = null,
        public string $label = '',
        public $options = [],
        public $fetch = null,
        public string $class = '',
        public $default = null,
        public bool $multiple = false,
        public ?int $maxOptions = null,
        public $defaultOption = null,
    ){
        $this->id = $this->id();
    }

}
