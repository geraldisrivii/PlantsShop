@php
    $attributes['class'] = 'delete-btn ' . $attributes['class'] . ' ' . 'delete-btn_' . $attributes['modifier'];
@endphp

<div {{ $attributes }}>
    <div class="delete-btn__line"></div>
</div>