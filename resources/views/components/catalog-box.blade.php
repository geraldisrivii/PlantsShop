@php
    $attributes['class'] = 'catalog-box ' . $attributes['class'] . ' ' . 'catalog-box_' . $attributes['modifier'];
@endphp


<div {{ $attributes }}>
    {{$slot}}
</div>