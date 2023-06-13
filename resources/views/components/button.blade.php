@props(['link'])
@php
    $attributes['class'] = 'btn ' . $attributes['class'] . ' ' . 'btn_' . $attributes['modifier'];
@endphp


@isset($link)
    <a {{ $attributes }}>{{ $slot }}</a>
@else
    <button {{ $attributes }}>{{ $slot }}</button>
@endisset
