@props(['project'])
<div class="border-1 shadow-lg my-2.5 bg-greenDuck rounded-2xl lg:mx-2.5 w-full lg:w-4/12 xl:w-2/12">
    <div class="relative cursor-pointer group hover:shadow-lg">
        <a class="flex justify-center items-center" target="_blank" rel="noopener noreferrer" href="{{$project->link}}">
            <img class="w-full h-64 rounded-t-2xl object-cover" src="{{asset('storage/'.$project->thumbnail)}}" height="100"
                 width="100" alt="">
            <img class="absolute w-24 opacity-25 rounded-full border-2 shadow-lg group-hover:opacity-100"
                 src="{{asset('assets/icons/play.svg')}}" alt="">
        </a>
    </div>
    <div class="p-5 text-white">
        <p class="font-black Title border-l-2 border-white pl-2.5">{{$project->title}}</p>
        <p class="border-l-2 border-white pt-2.5 pl-2.5">{{$project->description}}</p>
        <div class="flex justify-around items-end mt-5">
            <a class="hover:underline" href="/nos-projets/video/{{$project->slug}}">Détails ></a>
            <a class="hover:underline" target="_blank" rel="noopener noreferrer" href="{{$project->link}}">Vimeo ></a>
        </div>
    </div>
</div>
