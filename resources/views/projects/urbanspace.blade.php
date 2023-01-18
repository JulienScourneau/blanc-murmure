@extends('layouts.app')

@section('content')
<x-banner-project
src="{{asset('assets/project/project_urbanSpace_banner.png')}}"
text="Oser le monumental, affronter l’espace public en y impliquant ses habitants.
Concrètement, cela signifie de partir des demandes exprimées et de l’histoire du coin,
d’imaginer ensemble les manières d’intervenir dans le lieu, de préciser ce qu’on veut y dire,
de comment le traduire formellement et le réaliser techniquement.
Mettre en oeuvre, donner une place à chacun, à sa mesure, pour le plaisir de tous."
/>
    @foreach($projects as $project)
        @if ($loop->first)
            <x-urbanspace-card-first :project="$project" />
            @else
            <x-urbanspace-card :project="$project" />
        @endif
    @endforeach

@endsection