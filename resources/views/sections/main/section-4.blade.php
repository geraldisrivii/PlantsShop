@php
    $headerValues = [
        'header'=>'Наш каталог товаров',
        'text'=>'на котором сейчас размещен 21 вид'
    ];
@endphp

<section class="main-section-4 container">
    <x-header class="main-section-4__header" :values='$headerValues'/>
    <x-catalog-box class="main-section-4__catalog">
        <x-catalog-item></x-catalog-item>
        <x-catalog-item></x-catalog-item>
        <x-catalog-item></x-catalog-item>
    </x-catalog-box>
    <x-button link modifier="target" class="main-section-4__button">Каталог</x-button>
</section>