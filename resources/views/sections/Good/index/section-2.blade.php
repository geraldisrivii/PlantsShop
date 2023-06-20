
<section class="Good-index-section-2 container">
    <x-form-template method="GET" action="{{ route('goods.index') }}">
        <x-filter-box class="Good-index-section-2-filter-box">
            <div class="Good-index-section-2-filter-box-input-list-box">
                <x-input-list :categories="$orderByCategories" name="orderBy" class="Good-index-section-2-filter-box__input-list">
                </x-input-list>
                <x-input-list :categories="$categories" name="category_id" class="Good-index-section-2-filter-box__input-list">
                </x-input-list>
            </div>
            <div class="Good-index-section-2-filter-box-input-search-box">
                <x-input-search name="title" class="Good-index-section-2-filter-box__input-search">
                </x-input-search>
                <input type="text" name="page" hidden value="{{ request()->input('page', 1) }}">
                <x-button type="submit">Применить</x-button>
            </div>
        </x-filter-box>
    </x-form-template>
</section>

@push('scripts')
    <script src="{{ asset('js/filterComponetes.js') }}"></script>
@endPush
