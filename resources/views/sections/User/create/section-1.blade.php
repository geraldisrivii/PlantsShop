@php
    $headerValues = [
        'header'=>'Зарегистрируйтесь на сайте',
        'text'=>'И получите возможность  покупать товары онлайн с доставкой'
    ]
@endphp

<section class="user-create-section-1">
    <x-form-top  :modifiers="['big-rectangle', 'keyboard-image']" class="user-create-section-1-form-top">
        <x-form-template method="POST" action="{{ route('users.store', ['redirect' => request('redirect')]) }}">
            <x-header class="user-create-section-1-form-top__header" modifier="white" :values='$headerValues'/>
            <x-input-box class="user-create-section-1-form-top-input-box">
                <x-input placeholder="Придумайте логин" name="login"/>
                <x-input type="password" placeholder="Придумайте пароль." name="password"/>
                <x-input type="password" placeholder="Подтвердите пароль.." name="confirm_password"/>
                <x-button modifier="target" class="user-create-section-1-form-top-input-box-button">Оставить заявку</x-button>
            </x-input-box>
        </x-form-template>
    </x-form-top>
</section>