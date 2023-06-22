@php
    $colors = $good->colors;
    $result = request('color') == null ? true : false;
@endphp

<section class="Good-show-section-1 container">
    <div class="Good-show-section-1-left-container">
        <img class="Good-show-section-1-left-container__image" src="{{ asset($good->image) }}" alt="good image">
    </div>
    <div class="Good-show-section-1-right-container">

        <div class="Good-show-section-1-right-container-section-1">
            <p class="Good-show-section-1-right-container-section-1__paragraph">Наименование:</p>
            <h1 class="Good-show-section-1-right-container-section-1__header header">{{ $good->title }}</h1>
        </div>
        <div class="Good-show-section-1-right-container-section-3">
            <p>Цвет горшка:</p>
            <x-color-box :colors="$colors" />
        </div>
        <div class="Good-show-section-1-right-container-section-2">
            <div class="Good-show-section-1-right-container-section-2__price-box">
                <p>Стоимость:</p>
                <p class="Good-show-section-1-right-container-section-2__price">{{ $good->sale != null ? $good->sale->new_price : $good->price }} руб</p>
                @if ($good->sale != null)
                    <p class="Good-show-section-1-right-container-section-2__old-price">{{ $good->price }} руб </p>
                @endif
            </div>
            <x-form-template method="POST" action="{{ route('basket.store') }}">
                <input type="hidden" name="good_id" value="{{ $good->id }}">
                <input type="hidden" name="color_id" value="{{ request('color') }}">
                <input type="hidden" name="amount" value="1">
                <x-button :disabled="$result" type="submit" modifier="target">
                    В корзину</x-button>
            </x-form-template>
        </div>
        <div class="Good-show-section-1-right-container-section-4">
            <p>Описание:</p>
            <p class="Good-show-section-1-right-container-section-4__description">{{ $good->description }}</p>
        </div>
    </div>
</section>
