<?php

namespace Akosnoavek\LaravelFormComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;

class FormGroup extends BaseComponent
{
    public function __construct(
        public ?string $name = null,
        public string $label,
        public bool $inline
    ) {
        $this->id = $this->id();
    }

    public function render()
    {
        return view(config("form-components.components." . Str::kebab(class_basename($this::class)) . ".view"));
    }

    public function id()
    {
        return base64_encode(random_int(0, 9999) . isset($this->name) ? $this->name : null);
    }
}
