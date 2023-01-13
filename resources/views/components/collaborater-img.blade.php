@props(['src', 'hover', 'text'])
<div class="collaborater__box relative justify-center">
    <img class="w-full lg:p-2.5 object-cover" src={{$src}} alt="">
    <div class="absolute top-1 bg-greenDuck w-full h-full p-2.5 lg:overflow-hidden" style="display: none">
        <img src={{$hover}} alt="">
        <p class="text-xl lg:text-xs">{{$text}}</p>
    </div>
</div>