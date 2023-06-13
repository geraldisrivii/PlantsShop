@php
    $links = [
        '1' => 'Каталог',
        '2' => 'Корзина',
        '3' => 'Акции',
    ];
@endphp


<footer class="site-footer">
    <div class="site-footer__content-box">
        <img class="site-footer__logo" src="{{ asset('img/logo.svg')}}" alt="footer-logo">
        <nav>
            <ul class="site-footer-list">
                @foreach ($links as $key => $text)
                <li class="site-footer-list__item"><a href="{{$key}}" class="site-footer-list__link">{{$text}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</footer>