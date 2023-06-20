<section class="Good-index-section-5 container">
    <div class="Good-index-section-5__line"></div>
    <x-catalog-box class="Good-index-section-5__catalog-box">
        @foreach ($SecondSectionGoods as $item)
            <x-catalog-item :good="$item"></x-catalog-item>
        @endforeach
    </x-catalog-box>
</section>

@push('scripts')
@endPush
