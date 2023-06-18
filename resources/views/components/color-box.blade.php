@props([
    'colors' => null,
])

@php
    $attributes['class'] = 'btn ' . $attributes['class'] . ' ' . 'btn_' . $attributes['modifier'];
@endphp

@if ($colors != null)
    <div class="color-box">
        @foreach ($colors as $color)
            <a class="color-box__item" style="background-color:{{ $color->colorObject->hash }}"
                id="{{ $color->colorObject->id }}" href="?color={{ $color->colorObject->id }}">
            </a>
            @php
                $quantityArray[$color->colorObject->id] = $color->quantity;
            @endphp
        @endforeach
    </div>
    <p>Количество: {{$quantityArray[request('color')] ?? 'выберете цвет'}}</p>
@else
    <div>
        <p>not available colors</p>
    </div>
@endif
