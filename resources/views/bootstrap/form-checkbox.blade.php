<div>
    @php
        $id_old = $id;
        $id = $id . now()->toISOString();
    @endphp

    <input
        type="checkbox"
        wire:model.live="{{$name}}"
        name="{{ $name }}"
        id="{{ $id }}"
        autocomplete="off"
        style="width: 17px; height: 17px;"
        @if((bool) data_get($this, $name))
            checked
        @endif
        {!! $attributes !!}
  >
    <label for="{{ $id }}">{{ $label }}</label>
    <br>
    @script
        <script>
            window.check_error_messages = function (id) {
                query = '[error_id="' + id + '"]'
                nodes = document.querySelectorAll(query)
                if(nodes.length > 1){
                    nodes[0].remove()
                }
            }
        </script>
    @endscript

    @error($name)
        <div style="position: relative" error_id="error-{{$id_old}}">
            <br>
              <span x-init='
                window.check_error_messages("error-{{$id_old}}")
                console.log(this)
              ' class="error"
              style="position: absolute; top:0; width: 200px">{{$message}}</span>
            </br>
        </div>
    @enderror
</div>
