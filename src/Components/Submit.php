<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Components\Component;

class Submit extends Component
{
    public function __construct(){
        $this->id = $this->id();
    }
}
