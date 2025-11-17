<div>
    <input
        type="checkbox"
        wire:model.live="{{$name}}"
        name="{{ $name }}"
        id="{{ $id }}"
        autocomplete="off"
        @if((bool) data_get($this, $name))
            checked
        @endif
        {!! $attributes !!}
  >
    <label for="{{ $id }}">{{ $label }}</label>
    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
