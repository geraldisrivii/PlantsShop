@php
    $buttonId = Str::uuid();
    $listId = Str::uuid();
    $attributes['class'] = 'input-list ' . $attributes['class'] . ' ' . 'input-list_' . $attributes['modifier'];
@endphp
<div class="input-list-box">
    <div class="input-list-box-input">
        <input type="button" {{$attributes}} id="{{$buttonId}}"  value="Категория - 1">
    </div>
    <ul class="input-list-box-options" for="{{$buttonId}}">
        <li class="input-list-box-options__item"><input type="button" class="input-list-box-options__button" value="Категория - 1"></li>
        <li class="input-list-box-options__item"><input type="button" class="input-list-box-options__button"  value="Категория - 2"></input></li>
        <li class="input-list-box-options__item">
            <div class="input-list-box-options-list">
                <button for="{{$listId}}" class="input-list-box-options-list__button">Категория - 3</button>
                <ul id="{{$listId}}" class="input-list-box-options-list-options">
                    <li class="input-list-box-options__item"><input type="button" class="input-list-box-options__button"  value="Некий текст"></input></li>
                    <li class="input-list-box-options__item"><input type="button" class="input-list-box-options__button"  value="Некий текст"></input></li>
                </ul>
            </div>
        </li>
        <li class="input-list-box-options__item"><input type="button" class="input-list-box-options__button" value="Категория - 4"></input></li>
    </ul>
</div>

<script>
    console.log('{{$buttonId}}');
</script>