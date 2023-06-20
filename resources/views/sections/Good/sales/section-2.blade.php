<section class="Good-sales-section-2">
    <x-catalog-box class="Good-sales-section-2__catalog-box">
        @foreach ($secondSectionGoods as $salesGood)
            <x-catalog-item class="Good-sales-section-2__catalog-item" :good="$salesGood"></x-catalog-item>
        @endforeach
    </x-catalog-box>
</section>