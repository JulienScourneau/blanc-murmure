@props(['src', 'text'])
<div class="collaborater__box relative">
    <img class="collaborater__img w-full pt-3" src={{$src}} alt="">
    <div class="collaborater__text absolute top-3 bg-orange w-full bg-opacity-75 p-2.5" style="display: none">
        <p>{{$text}}</p>
    </div>
</div>