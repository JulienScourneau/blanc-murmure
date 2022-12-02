@props(['project'])
<div class="border-1 shadow-lg my-2.5 bg-greenDuck rounded-2xl lg:mx-2.5 w-2/12">
    <div class="relative cursor-pointer group hover:shadow-lg">
        <a target="_blank" rel="noopener noreferrer" href="{{$project->link}}">
            <img class="w-full h-64 rounded-t-2xl" src="{{$project->thumbnail}}" height="100" width="100" alt="">
            <img class="absolute inset-1/3 w-24 opacity-25 rounded-full border-2 shadow-lg group-hover:opacity-100" src="{{asset('assets/icons/play.svg')}}" alt="">
        </a>
    </div>
    <div class="p-5 text-white">
        <p class="font-black Title border-l-2 border-white pl-2.5">{{$project->title}}</p>
        <p class="border-l-2 border-white pt-2.5 pl-2.5">{{$project->description}}</p>
        <div class="flex justify-end items-end">
            <a class="hover:underline" target="_blank" rel="noopener noreferrer" href="{{$project->link}}">Vimeo ></a>
        </div>
    </div>
</div>