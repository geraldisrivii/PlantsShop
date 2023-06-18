@php
    $headerValues = [
        'header' => 'Отзывы',
        'text' => 'Отзыв можно написать после оплаты выбранного товара.',
    ];
@endphp
<section class="Good-show-section-3 container">
    <x-header class="Good-show-section-3__header" :values="$headerValues" />
    <x-review-box>
        @foreach ($reviews as $review)
            <x-review-item :review="$review"></x-review-item>
        @endforeach
    </x-review-box>
</section>

@push('scripts')
@endPush
