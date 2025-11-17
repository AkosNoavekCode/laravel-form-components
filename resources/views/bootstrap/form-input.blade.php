<div wire:key={{$id}}>
    <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="{{ $id }}" placeholder="{{$label}}" wire:model="{{$name}}"  {!! $attributes !!}/>
        <label for="{{ $id }}">{{ $label }}</label>
        @error($name)
            <span class="error">{{$message}}</span>
        @enderror
    </div>
</div>
