<div>
  <label for="{{ $id }}" class="form-label">{{ $label }}</label>
  <input wire:model="{{$name}}" type="range" name="{{ $name }}" class="form-range" id="{{ $id }}" {{$attributes}}>

  @error($name)
    <span>{{$message}}</span>
  @enderror
</div>
