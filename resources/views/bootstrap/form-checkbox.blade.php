<div>
    <input type="checkbox" wire:model="{{$name}}" name="{{ $name }}" id="{{ $id }}" autocomplete="off" {{$attributes}}>
    <label for="{{ $id }}">{{ $label }}</label>
    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
