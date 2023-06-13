@php
    $headerValues = [
        'header'=>'Авторизуйтесь на сайте',
        'text'=>'И получите возможность  пользоватся аккаунтом'
    ]
@endphp

<section class="user-login-section-1">
    <x-form-top :modifiers="['big-rectangle', 'keyboard-image']" class="user-login-section-1-form-top">
        <x-form-template method="POST" action="{{ route('users.store') }}">
            <x-header class="user-login-section-1-form-top__header" modifier="white" :values='$headerValues'/>
            <x-input-box class="user-login-section-1-form-top-input-box">
                <x-input placeholder="Ваш логин" name="login"/>
                <x-input type="password" placeholder="Ваш пароль." name="password"/>
                <x-button modifier="target" class="user-login-section-1-form-top-input-box-button">Оставить заявку</x-button>
            </x-input-box>
        </x-form-template>
    </x-form-top>
</section>