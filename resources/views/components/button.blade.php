@props(['link' => null, 'disabled' => false])
@php
    $attributes['class'] = 'btn ' . $attributes['class'] . ' ' . 'btn_' . $attributes['modifier'];
@endphp


@if ($link != null)
    <a {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>{{ $slot }}</a>
@else
    <button {{ $disabled ? 'disabled' : '' }} {{ $attributes }}>{{ $slot }}</button>
@endif
