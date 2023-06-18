@php
    $attributes['class'] = 'review-item ' . $attributes['class'] . ' ' . 'review-item_' . $attributes['modifier'];
@endphp

<div {{ $attributes }}>
    <h6 class="review-item__title">{{$review->title}}</h6>
    <p class="review-item__text">{{$review->body}}</p>
    <div class="review-item__info-box">
        <div class="review-item__info-item">
            <b>Автор</b>
            <p>{{$review->login}}</p>
        </div>
        <div class="review-item__info-item">
            <b>Год публикации:</b>
            <p>{{substr($review->created_at, 0, 10)}}</p>
        </div>
    </div>
</div>
