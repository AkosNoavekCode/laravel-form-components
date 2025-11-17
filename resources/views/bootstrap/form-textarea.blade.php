<div class="form-floating">
    <textarea wire:model="{{$name}}" class="form-control" id="{{ $id }}"  style="height: 200px" placeholder="{{$label}}" {!! $attributes !!}></textarea>
    <label for="{{ $id }}">{{ $label }}</label>

    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
