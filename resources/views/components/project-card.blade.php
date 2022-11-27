@props(['project'])
<div class="border-1 shadow-lg my-2.5 bg-greenDuck">
    @if($project->photos->count())
        <img class="w-full" src="{{$project->photos[0]->path}}" height="100" width="100" alt="">
    @else
        <img src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    @endif
    <div class="p-2.5 text-white">
        <p class="font-black Title border-l-2 border-white pl-2.5">{{$project->title}}</p>
        <p class="border-l-2 border-white pt-2.5 pl-2.5">{{$project->description}}</p>
    </div>
</div>
