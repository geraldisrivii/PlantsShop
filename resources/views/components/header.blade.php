@props(['level' => 'h2', 'values'=> [
    'header'=>'Декоративные растения',
    'text'=>'под индивидуальные нужды'
]])
@php
    $attributes['class'] = 'header-box ' . $attributes['class'] . ' ' . 'header-box_' . $attributes['modifier'];
@endphp


<div {{$attributes}}>
    <{{$level}} class="header-box__header header">{{$values['header']}}</{{$level}}>
    @if($attributes['modifier'] == 'white')
        <div></div>
    @endif
    <p class="header-box__text">{{$values['text']}}</p>
</div>