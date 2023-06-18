@props([
    'level' => 'h5',
    'good' => null,
    'values' => [
        'title' => 'Петуния какая-то',
        'description' => 'За счет своих особых свойств обеспечивает продолжительное цветение. даже в тени...',
        'image' => 'img/main/section-4/catalog_default.webp',
        'id' => 1,
        'price' => '100',
    ],
])

@php
    $attributes['class'] = 'catalog-item ' . $attributes['class'] . ' ' . 'catalog-item_' . $attributes['modifier'];
    if ($good != null) {
        $catalogItem = $good;
    } else {
        $catalogItem = (object) $values;
    }
@endphp


<div {{ $attributes }}>
    <a href="{{ route('goods.show', ['good' => $catalogItem->id]) }}">
        <div class="catalog-item-image-box">
            <img class="catalog-item-image-box__image" src="{{ asset($catalogItem->image) }}" />
        </div>
        <div class="catalog-item-descritpion-box">
            <div>
                <p class="catalog-item-descritpion-box__price">{{$catalogItem->sales_id != null ? $catalogItem->sale->new_price : $catalogItem->price }} руб.</p>
                @if ($catalogItem->sales_id != null)
                    <p class="catalog-item-descritpion-box__old-price">{{ $catalogItem->price }} руб.</p>
                @endif
            </div>
            <{{ $level }} class="catalog-item-descritpion-box__title">{{ substr($catalogItem->title, 0, 18) }}
                {{ mb_strlen($catalogItem->title) > 20 ? '...' : '' }}
                <{{ $level }} />
                <p class="catalog-item-descritpion-box__text">{{ substr($catalogItem->description, 0, 90) }}
                    {{ mb_strlen($catalogItem->description) > 90 ? '...' : '' }}</p>
        </div>
    </a>
</div>
