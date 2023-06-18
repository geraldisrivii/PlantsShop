@php
    $currentPage = request()->input('page');
@endphp


<section class="Good-index-section-6 container">
    <div class="Good-index-section-6-buttons">
        <x-button link href="?page={{$currentPage - 1}}" class="Good-index-section-6-buttons__button"><</x-button>
        <x-button link href="?page={{$currentPage + 1}}" class="Good-index-section-6-buttons__button">></x-button>
    </div>
    <p class="Good-index-section-6__text">10</p>
</section>

@push('scripts')
@endPush
