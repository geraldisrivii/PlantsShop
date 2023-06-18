@php
@endphp

<section class="Good-index-section-3 container">
    <x-catalog-box>
        @foreach ($firstSectionGoods as $item)
            <x-catalog-item :good="$item"></x-catalog-item>
        @endforeach
    </x-catalog-box>
</section>

@push('scripts')

@endPush
