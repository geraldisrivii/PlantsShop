@php
    $attributes['class'] = 'review-box ' . $attributes['class'] . ' ' . 'review-box_' . $attributes['modifier'];
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
