@php
    $headerValues = [
        'header' => 'Более 15 лет опыта работы',
        'text' => 'И более 5 лет над крупными проектами',
    ];
@endphp
<section class="Good-index-section-4 container">
    <x-header class="Good-index-section-4__header" :values="$headerValues" />
    <x-catalog-box class="Good-index-section-4__catalog-box">
        <x-catalog-item></x-catalog-item>
        <x-catalog-item></x-catalog-item>
        <x-catalog-item></x-catalog-item>
    </x-catalog-box>
    <x-button link modifier="target" href="{{route('goods.salesView')}}">Больше акций</x-button>
</section>

@push('scripts')
@endPush
