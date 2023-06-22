@props(['method' => 'GET'])

@php
    $types = ['GET', 'POST'];
    $isTypically = in_array($method, $types);
@endphp
<form {{ $attributes }} method="{{ $isTypically ? $method : 'POST' }}">
    {{ $method != 'GET' ? csrf_field() : '' }}
    {{ !$isTypically ? method_field($method) : '' }}
    {{ $slot }}
</form>
