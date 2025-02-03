<div>
    <label>{{$label}}</label>

    <div class="@if($inline) d-flex flex-row flex-wrap inline-space @endif">
        {!! $slot !!}
    </div>
</div>