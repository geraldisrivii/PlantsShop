@props(['basketItem' => null])

@php
    $attributes['class'] = 'order-item ' . $attributes['class'] . ' ' . 'order-item_' . $attributes['modifier'];
    
    $isSale = $basketItem->good->sales != null;
@endphp

<div {{ $attributes }} id="order-item-{{ $basketItem->id }}">
    <div class="order-item__left-box">
        <div class="order-item__image-box">
            <img class="order-item__image" src="{{ asset($basketItem->good->image) }}">
        </div>
        <div class="order-item__description-box">
            <h6 class="order-item__description-title">
                {{ $basketItem->good->title }}
            </h6>
        </div>
    </div>
    <div class="order-item__right-box">
        <div class="order-item__action-container">
            <div class="color-box__item" style="background-color: {{ $basketItem->color->hash }}"></div>
            <div class="order-item__action-box">
                <x-add-button id="{{ $basketItem->id }}"></x-add-button>
                <label for="{{ $basketItem->id }}">{{ $basketItem->amount }} шт</label>
                <x-delete-button id="{{ $basketItem->id }}"></x-delete-button>
            </div>
        </div>
        <div class="order-item__price-box">
            <p class="order-item__new-price">
                {{ $isSale ? $basketItem->good->sales->new_price : $basketItem->good->price }} ₽</p>
            @if ($isSale)
                <p class="order-item__old-price">{{ $basketItem->good->price }} ₽</p>
            @endif
        </div>
    </div>
</div>
