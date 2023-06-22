@props([
    'colors' => null,
    'isViewAmount' => true,
])

@php
    $attributes['class'] = 'btn ' . $attributes['class'] . ' ' . 'btn_' . $attributes['modifier'];
@endphp

@if ($colors != null)
    <div class="color-box">
        @foreach ($colors as $color)
            <a class="color-box__item" style="background-color:{{ $color->hash }}" id="{{ $color->id }}"
                href="?color={{ $color->id }}">
            </a>
            @php
                $quantityArray[$color->id] = $color->quantity;
            @endphp
        @endforeach
    </div>
    @if ($isViewAmount)
        <p>Количество: {{ $quantityArray[request('color')] ?? 'выберете цвет' }}</p>
    @endif
@else
    <div>
        <p>not available colors</p>
    </div>
@endif
