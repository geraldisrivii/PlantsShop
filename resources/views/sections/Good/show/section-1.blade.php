<section class="Good-show-section-1 container">
    <div class="Good-show-section-1-right-container">
        <div class="Good-show-section-1-right-container-section-1">
            <p class="Good-show-section-1-right-container-section-1__paragraph">Наименование:</p>
            <h1 class="Good-show-section-1-right-container-section-1__header header">{{ $good->title }}</h1>
        </div>
        <div class="Good-show-section-1-right-container-section-3">
            <p>Цвет горшка:</p>
            <x-color-box :colors="$goodColors" />
        </div>
        <div class="Good-show-section-1-right-container-section-2">
            <div class="Good-show-section-1-right-container-section-2__price-box">
                <p>Стоимость:</p>
                <p class="Good-show-section-1-right-container-section-2__price">{{ $good->price }} руб</p>
            </div>
            <x-button link modifier="target" href="/good/{{ $good->id }}/edit">В корзину</x-button>
        </div>
        <div class="Good-show-section-1-right-container-section-4">
            <p>Описание:</p>
            <p class="Good-show-section-1-right-container-section-4__description">{{ $good->description }}</p>
        </div>
    </div>
    <div class="Good-show-section-1-left-container">
        <img class="Good-show-section-1-left-container__image" src="{{ asset($good->image) }}" alt="good image">
    </div>
</section>

@push('scripts')
@endPush
