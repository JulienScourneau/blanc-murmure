@props(['src', 'hover', 'text'])
<div class="collaborater__box relative">
    <img class="collaborater__img w-full pt-3" src={{$src}} alt="">
    <div class="collaborater__text absolute top-1 bg-greenDuck w-full h-full p-2.5 border-2" style="display: none">
        <p>{{$text}}</p>
        <img class="w-full" src={{$hover}} alt="">
    </div>
</div>