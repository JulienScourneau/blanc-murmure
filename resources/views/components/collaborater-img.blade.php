@props(['src', 'hover', 'text'])
<div class="collaborater__box relative">
    <img class="collaborater__img w-full pt-3 lg:p-5" src={{$src}} alt="">
    <div class="collaborater__text absolute top-1 bg-greenDuck w-full h-full p-2.5 lg:overflow-hidden" style="display: none">
        <p class="text-xs">{{$text}}</p>
        <img class="" src={{$hover}} alt="">
    </div>
</div>