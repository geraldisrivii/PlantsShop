@php
    $links = [
        '1' => 'Каталог',
        '2' => 'Корзина',
        '3' => 'Акции',
    ];
@endphp


<header class="site-header container">
    <div class="site-header-left-box">
        <img src="{{ asset('img/logo.svg') }}" alt="logo">
        <nav class="nav">
            <ul class="nav-list">
                @foreach ($links as $route => $name)
                    <li class="nav-list__item"><a href="{{ $route }}" class="nav-list__link">{{ $name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="site-header-right-box">
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list__item">
                    <x-button-link href="#!" link class="nav-list__link">Регистрация</x-button-link>
                </li>
            </ul>
        </nav>
    </div>
</header>
