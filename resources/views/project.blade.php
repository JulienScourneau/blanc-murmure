@extends('layouts.app')

@section('content')
    <section class="w-full p-2.5">
        <h1 class="Title font-black text-2xl mt-5 mb-2.">Project</h1>
        <h2 class="Title font-bold text-xl">Sculpture</h2>
        <div class="flex flex-col mx-auto lg:flex-row flex-wrap">
            @if($sculptures->count())
                @foreach($sculptures as $sculpture)
                    <x-project-card :project="$sculpture"/>
                @endforeach
            @else
                <p>Nothing to show</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.">Illustration</h2>
        <div class="flex flex-col mx-auto lg:flex-row flex-wrap">
            @foreach($illustrations as $illustration)
                @if($illustration->photos->count())
                    {{-- <img src="{{$illustration->photos[0]->path}}" height="100" width="100" alt=""> --}}
                    <x-project-card :project="$illustration"/>
                @endif
                {{-- <p>{{$illustration->title}}</p> --}}
            @endforeach
        </div>

        <h2 class="Title font-bold text-xl mt-5 mb-2.">Vidéo</h2>
        <div class="flex flex-col mx-auto lg:flex-row flex-wrap">
            @if($videos->count())
                @foreach($videos as $video)
                    <x-project-card-video :project="$video"/>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.">Espace Urbain</h2>
        <div class="flex flex-col mx-auto lg:flex-row flex-wrap">
            @if($urbanSpaces->count())
                @foreach($urbanSpaces as $urbanSpace)
                <div class="border-1 shadow-lg my-2.5 bg-greenDuck rounded-2xl lg:mx-2.5 w-full lg:w-4/12 xl:w-2/12">
                    <img class="w-full h-64 rounded-t-2xl" src="{{$urbanSpace->thumbnail}}" height="100" width="100" alt="">
                    <div class="p-5 text-white">
                        <p class="font-black Title border-l-2 border-white pl-2.5">{{$urbanSpace->title}}</p>
                        <p class="border-l-2 border-white pt-2.5 pl-2.5">{{$urbanSpace->description}}</p>
                    </div>
                </div>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.5">Catalogue</h2>
        <div class="flex flex-col w-10/12 mx-auto lg:flex-row w-8/12 mx-0">
            @if($catalogs->count())
                @foreach($catalogs as $catalog)
                    <x-project-card-catalogue :project="$catalog"/>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
    </section>

@endsection
