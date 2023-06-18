@props(['name' => '', 'categories' => []])
@php
    $buttonId = Str::uuid();
    $listId = Str::uuid();
    $attributes['class'] = 'input-list ' . $attributes['class'] . ' ' . 'input-list_' . $attributes['modifier'];
@endphp
<div class="input-list-box">
    <div class="input-list-box-input">
        <label
            for="{{ $buttonId }}">{{ request()->input($name) != null ? request()->input($name) : 'Категория1' }}</label>
        <input type="text" name="{{ $name }}" {{ $attributes }} id="{{ $buttonId }}"
            value="{{ request()->input($name) != null ? request()->input($name) : 'Категория1' }}">
    </div>
    <ul class="input-list-box-options" for="{{ $buttonId }}">
        <li class="input-list-box-options__item">
            <div class="input-list-box-options__button">Категория - 1</div>
        </li>
        <li class="input-list-box-options__item">
            <div class="input-list-box-options__button">Категория - 2</div>
        </li>
        <li class="input-list-box-options__item">
            <div class="input-list-box-options__button">Категория - 3</div>
        </li>
        <li class="input-list-box-options__item">
            <div class="input-list-box-options-list">
                <input type="button" for="{{ $listId }}" class="input-list-box-options-list__button"
                    value="Категория - 4">
                <ul id="{{ $listId }}" class="input-list-box-options-list-options">
                    <li class="input-list-box-options__item">
                        <div type="button" class="input-list-box-options__button">Некий текст - 1</div>
                    </li>
                    <li class="input-list-box-options__item">
                        <div type="button" class="input-list-box-options__button">Некий текст - 2</div>
                    </li>
                    <li class="input-list-box-options__item">
                        <div type="button" class="input-list-box-options__button">Некий текст - 3</div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="input-list-box-options__item">
            <div class="input-list-box-options__button">Категория - 5</div>
        </li>
    </ul>
</div>
