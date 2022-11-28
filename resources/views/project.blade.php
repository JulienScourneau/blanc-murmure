@extends('layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto p-2.5">
        <h1 class="Title font-black text-2xl mt-5 mb-2.">Project</h1>
        <h2 class="Title font-bold text-xl">Sculpture</h2>
        <div class="flex flex-col">
            @if($sculptures->count())
                @foreach($sculptures as $sculpture)
                    <x-project-card :project="$sculpture"/>
                @endforeach
            @else
                <p>Nothing to show</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.">Illustration</h2>
        <div class="flex flex-col">
            @foreach($illustrations as $illustration)
                @if($illustration->photos->count())
                    {{-- <img src="{{$illustration->photos[0]->path}}" height="100" width="100" alt=""> --}}
                    <x-project-card :project="$illustration"/>
                @endif
                {{-- <p>{{$illustration->title}}</p> --}}
            @endforeach
        </div>

        <h2 class="Title font-bold text-xl mt-5 mb-2.">Vidéo</h2>
        <div class="flex flex-col">
            @if($videos->count())
                @foreach($videos as $video)
                    <img src="{{$video->thumbnail}}" height="100" width="100" alt="">
                    <p>{{$video->title}}</p>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.">Espace Urbain</h2>
        <div class="flex flex-col">
            @if($urbanSpaces->count())
                @foreach($urbanSpaces as $urbanSpace)
                    <img src="{{$urbanSpace->thumbnail}}" height="100" width="100" alt="">
                    <p>{{$urbanSpace->title}}</p>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="Title font-bold text-xl mt-5 mb-2.5">Catalogue</h2>
        <div class="flex flex-col">
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
