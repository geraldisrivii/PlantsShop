@php
    $attributes['class'] = 'filter-box ' . $attributes['class'] . ' ' . 'filter-box_' . $attributes['modifier'];
@endphp


<div {{$attributes}}>
    {{$slot}}
</div>