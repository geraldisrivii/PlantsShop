@php
    $attributes['class'] = 'form ' . $attributes['class'] . ' ' . 'form_' . $attributes['modifier'];
    $headerValues = [
        'header'=>'Наш каталог товаров',
        'text'=>'на котором сейчас размещен 21 вид'
    ];
@endphp

<x-form-template {{ $attributes }}>
        <div class="form__rectangle"></div>
        <div class="form-content">
            <x-header modifier="white" class="form-content__header" :values='$headerValues'/>
            {{ $slot }}
        </div>
</x-form-template>