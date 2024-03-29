@extends('layouts.app')

@section('content')
    <x-banner-project
        src="{{asset('assets/project/project_sculpture_banner.png')}}"
        text="La Sculpture,
    c'est d’explorer le subtil et le monumental, le volume en tant que tel et l’espace qu’il occupe.
    Des réflexions qui nous poussent à développer un regard plus aiguisé sur notre environnement
    comme sur nous-mêmes."
    />

    <div class="flex flex-col mx-auto lg:flex-row flex-wrap justify-center">
        @if($sculptures->count())
            @foreach($sculptures as $key => $sculpture)
                <x-project-card :id="$key" :project="$sculpture"/>
                <x-modalCarousel :project="$sculpture"/>
            @endforeach
    </div>
    <div class="my-8 align-center">
        {{$sculptures->links('pagination::tailwind')}}
    </div>
        @else
            <p>Nothing to show</p>
        @endif
@endsection
