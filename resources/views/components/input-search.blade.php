@props(['textValue'=>'поиск по наименованию'])

@php
    $attributes['class'] = 'input-search ' . $attributes['class'] . ' ' . 'input-search_' . $attributes['modifier'];
@endphp

<div {{$attributes}}>
<input class="input-search__input input-search_{{$attributes['modifier']}}__input" placeholder="{{$textValue}}"/>
<img class="input-search__image input-search_{{$attributes['modifier']}}__image" src="{{ asset('img/Search.svg')}}" alt="Search-logo">
</div>