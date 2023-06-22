@php
    $attributes['class'] = 'add-btn ' . $attributes['class'] . ' ' . 'add-btn_' . $attributes['modifier'];
@endphp

<button {{ $attributes }}>
    <p class="add-btn__text">+</p>
</button>