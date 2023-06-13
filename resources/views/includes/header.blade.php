@php
    $links = [
        'main'=>'Главная',
        'goods.index' => 'Каталог',
        'orders.index' => 'Корзина',
        'goods.salesView' => 'Акции',
    ];
@endphp


<header class="site-header container">
    <div class="site-header-left-box">
        <a href="{{ route('main')}}">
            <img class="site-header-left-box__logo" src="{{ asset('img/logo.svg') }}" alt="logo">
        </a>
        <nav class="nav">
            <ul class="nav-list">
                @foreach ($links as $route => $name)
                    <li class="nav-list__item"><a href="{{ route($route) }}" class="nav-list__link {{ request()->routeIs($route) ? 'active' : '' }}">{{ $name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="site-header-right-box">
        <nav class="nav">
            <ul class="nav-list">
                @if(!(session()->has('user')))
                <li class="nav-list__item"><a href="{{ route('users.loginView') }}" class="nav-list__link {{ request()->routeIs('users.loginView') ? 'active' : '' }}">{{__('Войти')}}</a></li>
                <li class="nav-list__item">
                    <x-button href="{{route('users.create')}}" link class="nav-list__link">{{__('Регистрация')}}</x-button>
                </li>
                @else
                <li class="nav-list__item">
                    <x-button href="{{route('users.index')}}" link class="nav-list__link">{{__('Профиль')}}</x-button>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
