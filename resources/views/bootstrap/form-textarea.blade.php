<div>
    <label for="{{ $id }}">{{ $label }}</label>
    <textarea wire:model="{{$name}}" class="form-control" id="{{ $id }}" style="border-radius: 10px; border: 1px solid lightgray; height: 200px" {!! $attributes !!}></textarea>
    @error($name)
      <span>{{$message}}</span>
    @enderror
</div>
