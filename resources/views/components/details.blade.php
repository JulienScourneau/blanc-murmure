@props(['video'])
<div class="p-5 bg-greenDuck lg:my-5">
    <h2 class="Title font-black text-2xl text-white flex justify-end">{{$video->title}}</h2>
</div>
<div class="group hover:shadow">
    <a class="flex justify-center items-center" target="_blank" rel="noopener noreferrer" href="{{$video->link}}">
        <img class="w-full h-auto rounded-t-2xl" src="{{asset('storage/'.$video->thumbnail)}}" height="100" width="100"
             alt="">
        <img class="absolute w-24 opacity-25 rounded-full border-2 shadow-lg group-hover:opacity-100"
             src="{{asset('assets/icons/play.svg')}}" alt="">
    </a>
</div>
<article class="p-2.5 lg:flex lg:justify-between">
    <div>
        <p class="lg:border-l-2 lg:border-green lg:my-2.5 lg:p-2.5">
            <span class="Title text-green">Réalisé par : </span>
            {{$video->author}}
        </p>
        <p class="lg:border-l-2 lg:border-green lg:my-2.5 lg:p-2.5">
            <span class="Title text-green">Durée : </span>
            {{$video->duration}}
        </p>
        <p class="lg:border-l-2 lg:border-green lg:my-2.5 lg:p-2.5">
            <span class="Title text-green">Production : </span>
            {{$video->year}}
        </p>
    </div>
    <div>
        <p class="lg:border-l-2 lg:border-green lg:my-2.5 lg:p-2.5">
            <span class="Title text-green">Projet organisé par : </span>
            {{$video->partnership}}
        </p>
    </div>
</article>
