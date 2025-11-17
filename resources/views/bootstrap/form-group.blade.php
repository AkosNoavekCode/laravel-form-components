<div>
    <label>{{$label}}</label>

    <div class="@if($inline) d-flex flex-row flex-wrap inline-space @endif" {{$attributes}}>
        {!! $slot !!}
    </div>
</div>
