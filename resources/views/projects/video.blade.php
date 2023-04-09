@extends('layouts.app')

@section('content')
    <x-banner-project
        src="{{asset('assets/project/project_video_banner.png')}}"
        text="La vidéo
    permet une narration du monde, propre à chacun.
    Petites idées de départ, grandes pensées en mouvement,
    tel un laboratoire on y expérimente au fil des images
    une expression poétique et décalée."
    />

    <div class="flex flex-col mx-auto lg:flex-row flex-wrap justify-center">
        @if($videos->count())
            @foreach($videos as $video)
                <x-project-card-video :project="$video"/>
            @endforeach
    </div>
    <div class="my-8 align-center">
        {{$videos->links('pagination::tailwind')}}
    </div>
    @else
        <p>Aucun projet</p>
    @endif
@endsection
