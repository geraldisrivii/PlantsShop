@php
    $attributes['class'] = 'paginate-box ' . $attributes['class'] . ' ' . 'paginate-box_' . $attributes['modifier'];
    $currentPage = request()->input('page');
@endphp
<div {{ $attributes }}>
    <div class="paginate-box-buttons">
        <x-button link href="?page={{$currentPage - 1}}" class="paginate-box-buttons__button"><</x-button>
        <x-button link href="?page={{$currentPage + 1}}" class="paginate-box-buttons__button">></x-button>
    </div>
    <p class="paginate-box__text">10</p>
</div>