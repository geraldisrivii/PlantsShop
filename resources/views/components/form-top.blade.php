@props(['modifiers' => []])
@php
    $classes = [];
    foreach ($modifiers as $value) {
        $classes[] = 'form-top_' . $value;
    }
    $attributes['class'] = $attributes['class'] . ' ' . 'form-top ' . implode(' ', $classes);
@endphp


<div {{$attributes}}>
    <div class="form-top__rectangle form-top_{{implode('__rectangle form-top_', $modifiers) . '__rectangle'}}"></div>
    <div class="form-top__content form-top_{{implode('__content form-top_', $modifiers)}}__content container">
        {{$slot}}
    </div>
</div>