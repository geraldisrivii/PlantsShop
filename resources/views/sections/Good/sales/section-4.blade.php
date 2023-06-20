<section class="Good-sales-section-4 container">
    <x-catalog-box class="Good-sales-section-4__catalog-box">
        @foreach ($fourthSectionGoods as $salesGood)
            <x-catalog-item class="Good-sales-section-4__catalog-item" :good="$salesGood"></x-catalog-item>
        @endforeach
    </x-catalog-box>
</section>