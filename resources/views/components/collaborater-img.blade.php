@props(['src', 'hover', 'text'])
<div class="collaborater__box relative justify-center h-96 mx-auto lg:mx-5 my-5 w-1/2 overflow-hidden">
    <img class="h-full object-cover" src={{ $src }} alt="">
    <div class="absolute top-0 bg-greenDuck w-full h-full overflow-hidden" style="display: none">
        <img class="object-cover" src={{ $hover }} alt="">
        <p class="text-base px-2.5 lg:text-base">{{ $text }}</p>
    </div>
</div>
