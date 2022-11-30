@extends('layouts.app')

@section('content')
<x-banner-project 
src="{{asset('assets/project/project_illustration_banner_2.png')}}" 
text="La vidéo
    c’est s’éveiller à la représentation, figurative ou non, de ce qui nous entoure. Un regard, une forme, une couleur, 
    autant d’outils pour créer un livre-objet, une peinture murale, une image." 
/>
    
    <div class="flex flex-col mx-auto lg:flex-row flex-wrap justify-center">
        @if($videos->count())
            @foreach($videos as $video)
                <x-project-card-video :project="$video"/>
            @endforeach
        @else
            <p>Aucun projet</p>
        @endif
    </div>
@endsection
