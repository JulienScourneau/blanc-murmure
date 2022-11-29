@props(['src','text'])
<div>
    <img class="mx-auto w-6/12" src={{$src}} alt="">
    <div class="bg-greenDuck w-full mb-5">
        <h2 class="Title size-2xl font-black text-white text-justify p-5 w-6/12 mx-auto">
            {{$text}}
        </h2>
    </div>
</div>

