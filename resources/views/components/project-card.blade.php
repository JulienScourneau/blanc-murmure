@props(['project'])
<div class="border-1 shadow-lg my-2.5 bg-greenDuck rounded-2xl lg:mx-2.5 w-2/12">
    @if($project->photos->count())
    <button class="buttonCarousel">
        <img class="w-full h-64 rounded-t-2xl" src="{{$project->photos[0]->path}}" height="100" width="100" alt="">
    </button>
    @else
        <img class="w-full h-64 rounded-t-2xl" src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    @endif
    <div class="p-5 text-white">
        <p class="font-black Title border-l-2 border-white pl-2.5">{{$project->title}}</p>
        <p class="border-l-2 border-white pt-2.5 pl-2.5">{{$project->description}}</p>
    </div>
</div>
