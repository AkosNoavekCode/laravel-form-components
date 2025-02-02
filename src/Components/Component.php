<?php

namespace AkosNoavek\LaravelFormComponents;

use Illuminate\Support\Str;

class Component 
{
    public string $name;


    public function render()
    {
        return view(config("form-components.components.{Str::kebab(class_basename($this))}"));
    }
    
    public function id()
    {
        return base64_encode(random_int(0, 9999) . $this->name);
    }
}