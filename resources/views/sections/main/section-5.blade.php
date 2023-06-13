<section class="main-section-5 container">
    <x-form class="main-section-5__form" mehtod="POST" action="{{ route('bids.store')}}">
        <x-input-box class="main-section-5-input-box">
            <x-input class="main-section-5-input-box__input" placeholder="Ваше имя" name="name"></x-input>
            <x-input class="main-section-5-input-box__input" placeholder="Ваш номер телефона" name="number"></x-input>
            <x-button modifier="target">Оставить заявку</x-button>
        </x-input-box>
    </x-form>
</section>