@props(['textValue' => 'поиск по наименованию', 'name' => 'title'])

@php
    $attributes['class'] = 'input-search ' . $attributes['class'] . ' ' . 'input-search_' . $attributes['modifier'];
@endphp

<div {{ $attributes }}>
    <input name="{{ $name }}" class="input-search__input input-search_{{ $attributes['modifier'] }}__input"
        placeholder="{{ $textValue }}" value="{{request()->input($name) != null ? request()->input($name) : ''}}" />
    <img class="input-search__image input-search_{{ $attributes['modifier'] }}__image" src="{{ asset('img/Search.svg') }}"
        alt="Search-logo">
</div>
