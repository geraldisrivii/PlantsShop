<section class="Good-sales-section-3 container">
    <x-form modifier="card-image" class="Good-sales-section-3__form" mehtod="POST" action="{{ route('bids.store')}}">
        <x-input-box class="Good-sales-section-3-input-box">
            <x-input class="Good-sales-section-3-input-box__input" placeholder="Ваше имя" name="name"></x-input>
            <x-input class="Good-sales-section-3-input-box__input" placeholder="Ваш номер телефона" name="number"></x-input>
            <x-button modifier="target">Оставить заявку</x-button>
        </x-input-box>
    </x-form>
</section>