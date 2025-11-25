<div>
    <label>{{$label}}</label>

    <div
        @class([
            "d-flex flex-row flex-wrap inline-space" => (bool) $inline,
            "d-flex flex-column flex-wrap inline-space g-2" => ! (bool) $inline
        ])
        @style([
            "gap: 10px" => ! (bool) $inline
        ])
        {!! $attributes !!}>
        {!! $slot !!}
    </div>
</div>
