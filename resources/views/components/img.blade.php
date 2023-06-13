@props(['url'=>'img/main/section-3/work_image_1.webp', 'postfixes'=>[
    'max' => '1400w',
    'min' => '400w'
]])

@php
    $urls = [];
    $urlWihtoutExt = substr($url, 0, strrpos($url, '.'));   
    $urlExt = substr($url, strrpos($url, '.'));   
    $url = $urlWihtoutExt . '-max' . $urlExt;
    foreach ($postfixes as $key => $value) {
        $urls[] = $urlWihtoutExt . '-' . $key . $urlExt . ' ' . $value . ',';
    }
@endphp

<img src="{{ asset($url) }}" alt="{{substr($url, strrpos($url, '/'))}}"
srcset=" @foreach ($urls as $url)
        {{ asset($url) }}
    @endforeach">

