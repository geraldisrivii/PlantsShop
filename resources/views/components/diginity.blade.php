@props(['diginity' => [
    'title'=>'Действительно большой склад',
    'text'=>'На текущий момент на складе более  120 видов растений.
        45 из которых - виды петуний для вашего сада.',
    'url'=>'img/main/section-2/diginity_image_1.svg'
]])

@php
    $attributes['class'] = 'diginity ' . $attributes['class'] . ' ' . 'diginity_' . $attributes['modifier'];
    $diginity = (object)$diginity;
@endphp


<div {{ $attributes }}>
    <img src="{{ asset($diginity->url) }}" alt="{{$diginity->title}}">
    <div class="diginity-description">
        <h3 class="diginity-description__title">{{$diginity->title}}</h3>
        <p class="diginity-description__text">{{$diginity->text}}</p>
    </div>
</div>