@php
    $attributes['class'] = 'input-box ' . $attributes['class'] . ' ' . 'input-box_' . $attributes['modifier'];
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>