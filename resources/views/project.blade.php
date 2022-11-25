@extends('layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto">
        <h1 class="font-bold text-xl">Project</h1>
        <h2 class="font-semibold text-lg">Sculpture</h2>
        <div class="flex">
            @if($sculptures->count())
                @foreach($sculptures as $sculpture)
                    @if($sculpture->photos->count())
                        <img src="{{$sculpture->photos[0]->path}}" height="100" width="100" alt="">
                    @endif
                    <p>{{$sculpture->title}}</p>
                @endforeach
            @else
                <p>Nothing to show</p>
            @endif
        </div>
        <h2 class="font-semibold text-lg">Illustration</h2>
        <div class="flex">
            @foreach($illustrations as $illustration)
                @if($illustration->photos->count())
                    <img src="{{$illustration->photos[0]->path}}" height="100" width="100" alt="">
                @endif
                <p>{{$illustration->title}}</p>
            @endforeach
        </div>

        <h2 class="font-semibold text-lg">Vidéo</h2>
        <div class="flex">
            @if($videos->count())
                @foreach($videos as $video)
                    <img src="{{$video->thumbnail}}" height="100" width="100" alt="">
                    <p>{{$video->title}}</p>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="font-semibold text-lg">Espace Urbain</h2>
        <div class="flex">
            @if($urbanSpaces->count())
                @foreach($urbanSpaces as $urbanSpace)
                    <img src="{{$urbanSpace->thumbnail}}" height="100" width="100" alt="">
                    <p>{{$urbanSpace->title}}</p>
                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
        <h2 class="font-semibold text-lg">Catalogue</h2>
        <div class="flex">
            @if($catalogs->count())
                @foreach($catalogs as $catalog)

                    <img src="{{$catalog->thumbnail}}" height="100" width="100" alt="">
                    <p>{{$catalog->name}}</p>

                @endforeach
            @else
                <p>Aucun projet</p>
            @endif
        </div>
    </section>

@endsection
