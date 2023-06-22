@php
    $attributes['class'] = 'orders-box ' . $attributes['class'] . ' ' . 'orders-box_' . $attributes['modifier'];
@endphp


<div {{ $attributes }}>
    {{ $slot }}
    <div class="orders-box__line"></div>
</div>