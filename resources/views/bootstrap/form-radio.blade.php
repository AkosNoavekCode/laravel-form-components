<div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $name }}" wire:model="{{$name}}" id="{{ $id }}" {{$attributes}}>
    <label class="form-check-label" for="{{ $id }}">
      {{ $label }}
    </label>
    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
