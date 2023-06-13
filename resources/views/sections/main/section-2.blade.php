@php
    $diginity = [
        'title'=>'Огромное разнообразие растений под любые нужды',
    'text'=>'На текущий момент на складе более  120 видов растений. 45 из которых - виды петуний для вашего сада.',
    'url'=>'img/main/section-2/diginity_image_2.svg'
    ];
    $headerValues = [
        'header'=>'Более 15 лет опыта работы',
        'text'=>'И более 5 лет над крупными проектами'
    ];
@endphp

<section class="main-section-2 container">
    <x-header class="main-section-2__header" :values='$headerValues'/>
    <div class="diginity-box">
        <x-diginity modifier="right"></x-diginity>
        <x-diginity :diginity='$diginity' modifier="left"></x-diginity>
    </div>
</section>