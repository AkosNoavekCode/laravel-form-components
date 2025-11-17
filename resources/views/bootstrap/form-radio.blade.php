<div class="form-check">
    @php
        $id = $id . now()->toISOString();
    @endphp

    <input class="form-check-input" type="radio" name="{{ $name }}" wire:model.live="{{$name}}" id="{{ $id }}" {!! $attributes !!}>
    <label class="form-check-label" for="{{ $id }}">
      {{ $label }}
    </label>
    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
