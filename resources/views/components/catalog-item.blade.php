@props(['level' => 'h5', 'values' => [
    'title'=>'Петуния какая-то',
    'text' => 'За счет своих особых свойств обеспечивает продолжительное цветение. даже в тени...',
    'url'=> 'img/main/section-4/catalog_default.webp',
]])

@php
    $attributes['class'] = 'catalog-item ' . $attributes['class'] . ' ' . 'catalog-item_' . $attributes['modifier'];
    $catalogItem = (object)$values;
@endphp


<div {{ $attributes }}>
    <div class="catalog-item-image-box">
        <img class="catalog-item-image-box__image" src="{{asset($catalogItem->url)}}"/>
    </div>
    <div class="catalog-item-descritpion-box">
        <{{$level}} class="catalog-item-descritpion-box__title">{{$catalogItem->title}}<{{$level}}/>
        <p class="catalog-item-descritpion-box__text">{{$catalogItem->text}}</p>
    </div>
</div>