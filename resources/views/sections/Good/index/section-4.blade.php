@php
    $headerValues = [
        'header' => 'Более 15 лет опыта работы',
        'text' => 'И более 5 лет над крупными проектами',
    ];
@endphp
<section class="Good-index-section-4 container">
    <x-header class="Good-index-section-4__header" :values="$headerValues" />
    <x-catalog-box class="Good-index-section-4__catalog-box">
        @foreach ($salesGoods as $salesGood)
            <x-catalog-item :good="$salesGood"></x-catalog-item>
        @endforeach
    </x-catalog-box>
    <x-button link modifier="target" href="{{ route('sales.index') }}">Больше акций</x-button>
</section>

@push('scripts')
@endPush
