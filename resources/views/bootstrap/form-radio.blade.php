<div class="form-check">
    @php
        $id_old = $id;
        $id = $id . now()->toISOString();
    @endphp

<div>
    <input class="form-check-input" type="radio" name="{{ $name }}" wire:model.live="{{$name}}" id="{{ $id }}" {!! $attributes !!}>
    <label class="form-check-label" for="{{ $id }}">
      {{ $label }}
    </label>
</div>

    @script
        <script>
            window.check_error_messages = function (id) {
                query = '[error_id="' + id + '"]'
                nodes = document.querySelectorAll(query)
                if(nodes.length > 1){
                    nodes[1].remove()
                }
            }
        </script>
    @endscript

    @error($name)
        <div error_id="error-{{$id_old}}">
          </br>
          <span x-init='
            window.check_error_messages("error-{{$id_old}}")
          ' class="error">{{$message}}</span>
        </div>
    @enderror
</div>
