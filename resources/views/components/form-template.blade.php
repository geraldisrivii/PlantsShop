@props(['method' => 'GET'])

@php
    $types = ['GET', 'POST'];
    $isTypically = in_array($method, $types);
@endphp
<form {{ $attributes }} method="{{ $isTypically ? $method : 'POST' }}">
    @if ($method != 'GET')
        @csrf
    @endif
    @if (!$isTypically)
        @method($method)
    @endif
    {{ $slot }}
</form>
