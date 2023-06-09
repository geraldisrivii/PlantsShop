@php
    $attributes['class'] = 'form-top ' . $attributes['class'] . ' ' . 'form-top_' . $attributes['modifier'];
@endphp


<div {{$attributes}}>
    <div class="form-top__rectangle"></div>
    <div class="form-top__content container">
        {{$slot}}
    </div>
</div>