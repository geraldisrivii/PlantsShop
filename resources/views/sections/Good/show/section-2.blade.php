@php
    $headerValues = [
        'header' => 'Похожие товары',
        'text' => 'с более чем 120 видами растений',
    ];
@endphp
<section class="Good-show-section-2 container">
    <x-header class="Good-show-section-2__header" :values="$headerValues" />
    <x-catalog-box class="Good-show-section-2__catalog">
        @foreach ($sameGoods as $sameGood)
            <x-catalog-item :good="$sameGood"></x-catalog-item>
        @endforeach
    </x-catalog-box>
    <x-button link class="Good-show-section-2__button">Больше похожих</x-button>
</section>

@push('scripts')
@endPush
