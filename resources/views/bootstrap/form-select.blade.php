@props([
    'multiple' => true,
])

@php
    $id = Str::random(4);
    $apiModels = config('form-components.api');

@endphp

@if($fetch)
    @php
        $parts = explode('.', $name, 2);
        $beforeDot = $parts[0];
        $afterDot = $parts[1] ?? '';
        if(!empty($defaultValue = data_get($this->$beforeDot, $afterDot))){
            $value = $apiModels[$fetch]::find($defaultValue);
        }
    @endphp
@endif

<div>

    {{-- Select  --}}
    <div class="select-wrapper" wire:ignore>
        <label for="select{{ $id }}">{{ $label }}</label>
        <select
                x-data="{
       init() {
                window.logThis;

          var settings = {
                @if(!empty($maxOptions))
                    maxOptions: {{$maxOptions}},
                @endif
                @if($multiple)
                    multiple: true,
                    plugins: ['change_listener', 'remove_button'],
                @else
                    multiple: false,
                    plugins: ['change_listener'],
                @endif
                onItemAdd: function(value, item) {
                    if(! this.dropdown.classList.contains('multi')){
                        this.control.classList.add('pb-4');
                    };
                    return this.value = value;
                },
                closeAfterSelect: true,
                create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                onChange(value) {
                    @this.set('{{$name}}', value)
                },
                @if($fetch)
                    valueField: 'id',
                    labelField: '{{ $searchField }}',
                    searchField: '{{ $searchField }}',
                    options: [],
                    load: function (query, callback) {
                    var self = this;
                    if (self.loading > 1) {
                        callback();
                        return;
                    }
                    var url = '{{$fetch}}?search=' + encodeURIComponent(query);
                    console.log(url);
                    fetch(url, {
                            method: 'GET',
                            headers: {
                            'Content-Type': 'application/json',
                        }
                    })
                        .then(response => response.json())
                        .then(json => {
                            callback(json);
                        }).catch(() => {
                            callback();
                        });
                    },
                @endif
            };
            if(window.tom{{$id}} === undefined){
                window.tom{{$id}} = new TomSelect('#select{{$id}}', settings);
                {{--Sets the default value--}}
                @if($fetch and !empty($defaultValue))
                    window.tom{{$id}}.addOption({'{{ $searchKey }}': '{{ $defaultValue?->{$searchKey} }}', '{{ $searchField }}': `{{ $value?->{$searchField} }}`});
                    window.tom{{$id}}.setValue(`{{$defaultValue?->{$searchKey} }}`);
                @endif
            }
        },
    }
"
                autocomplete="off"
                class="my-2 border-bottom input-hidden form-select "
                name="{{$name}}"
                id="select{{ $id }}"
                @if($multiple) multiple @endif>
            <option value=""></option>
            @if(!$fetch && $options)
                @foreach($options as $value => $option)
                    <option value="{{ $value }}">
                        {{ $option }}
                    </option>
                @endforeach
            @endif
        </select>
    </div>


    <script>
        // Keeps the select value hooked to the component
        document.addEventListener('livewire:initialized', () => {
            Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
                succeed(({ snapshot, effect }) => {
                    if(@this.get('{{$name}}') != window.tom{{$id}}.getValue() && ! (@this.get('{{$name}}') === null && window.tom{{$id}}.getValue() === "")){
                        window.tom{{$id}}.setValue(@this.get('{{$name}}'));
                    }
                })
            })
        })
    </script>
</div>
