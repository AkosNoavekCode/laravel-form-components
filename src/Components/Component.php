<?php

namespace AkosNoavek\LaravelFormComponents\Components;

use AkosNoavek\LaravelFormComponents\Helpers\FormDataBinder;
use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;


class Component extends BaseComponent
{
  public string $id;

  public string $name = '';

  public function isWired(): bool
  {
    if ($this->attributes && count($this->attributes->whereStartsWith('wire:model')->getIterator())) {
      return false;
    }

    return app(FormDataBinder::class)->isWired();
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
