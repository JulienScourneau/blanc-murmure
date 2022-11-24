@extends('layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto">
        <h1 class="font-bold text-xl">Project</h1>


        <h2 class="font-semibold text-lg">Sculpture</h2>
        <div class="flex">
            @foreach($sculptures as $sculpture)

                {{-- TODO: Check if empty --}}
                {{-- TODO: Check if empty photo --}}
                <img src="{{$sculpture->photos[0]->path}}" height="100" width="100" alt="">
                <p>{{$sculpture->title}}</p>
            @endforeach
        </div>


        <h2 class="font-semibold text-lg">Illustration</h2>
        <div class="flex">
            @foreach($illustrations as $illustration)
                {{-- TODO: Check if empty photo --}}
                <img src="{{$illustration->photos[0]->path}}" height="100" width="100" alt="">
                <p>{{$illustration->title}}</p>
            @endforeach
        </div>

        <h2 class="font-semibold text-lg">Vidéo</h2>
        <div class="flex">
            @foreach($videos as $video)
                <img src="{{$video->thumbnail}}" height="100" width="100" alt="">
                <p>{{$video->title}}</p>
            @endforeach
        </div>

        <h2 class="font-semibold text-lg">Espace Urbain</h2>
        <div class="flex">
            @foreach($urbanSpaces as $urbanSpace)
                <img src="{{$urbanSpace->thumbnail}}" height="100" width="100" alt="">
                <p>{{$urbanSpace->title}}</p>
            @endforeach
        </div>

        <h2 class="font-semibold text-lg">Catalogue</h2>
        <div class="flex">
            @foreach($catalogs as $catalog)

                <img src="{{$catalog->thumbnail}}" height="100" width="100" alt="">
                <p>{{$catalog->name}}</p>

            @endforeach
        </div>
    </section>

@endsection
