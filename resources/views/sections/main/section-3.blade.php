@php
    $headerValues = [
        'header'=>'Более 15 лет опыта работы',
        'text'=>'И более 5 лет над крупными проектами'
    ];
@endphp

<section class="main-section-3 container">
    <x-header class="main-section-3__header" :values='$headerValues'/>
    <div class="main-section-3-image-box">
        <x-img url='img/main/section-3/work_image_1.webp'/>
        <x-img url='img/main/section-3/work_image_2.webp'/>
    </div>
</section>