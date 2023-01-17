@props(['src','text'])
<div>
    <div class="mx-auto w-full lg:w-6/12 h-96 object-cover">
        <img class="" src={{$src}} alt="">
    </div>
    <div class="bg-greenDuck w-full mb-5">
        <h2 class="Title size-2xl font-black text-white text-justify p-5 w-11/12 lg:w-6/12 mx-auto">
            {{$text}}
        </h2>
    </div>
</div>

