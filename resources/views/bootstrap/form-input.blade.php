<div wire:key={{$id}}>
    <div class="mb-3">
        <label for="{{ $id }}">{{ $label }}</label>
        <input style="border: 1px solid lightgray; border-radius: 10px" class="form-control" id="{{ $id }}" wire:model="{{$name}}"  {!! $attributes !!}/>
        @error($name)
            <span class="error">{{$message}}</span>
        @enderror
    </div>
</div>
