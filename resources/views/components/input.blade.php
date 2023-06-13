@php
    $attributes['class'] = 'input ' . $attributes['class'] . ' ' . 'input_' . $attributes['modifier'];
@endphp

<input {{ $attributes }}>