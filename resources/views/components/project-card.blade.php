@props(['project', 'id'])
<div class="border-1 shadow-lg my-2.5 bg-greenDuck rounded-2xl lg:mx-2.5 w-full lg:w-4/12 xl:w-2/12">
    @if($project->thumbnail !== null)
        <div class="buttonCarousel w-full hover:cursor-pointer overflow-hidden rounded-t-2xl group">
            <img id={{$project->id}} class="w-full h-64 rounded-t-2xl object-cover group-hover:scale-125 group-hover:drop-shadow-md transition-all duration-500" src="{{asset('storage/'. $project->thumbnail)}}" height="100"
                 width="100" alt="">
        </div>
    @else
        <img class="w-full h-64 rounded-t-2xl" src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    @endif
    <div class="p-5 text-white">
        <p class="font-black Title border-l-2 border-white pl-2.5">{{$project->title}}</p>
        <div class="border-l-2 border-white pt-2.5 pl-2.5">{!! $project->description !!}</div>
    </div>
    <div class="flex justify-end">
        <button id={{ $project->id }} class="buttonCarousel m-5 highlightOrange">Voir plus ></button>
    </div>
</div>
