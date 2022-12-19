@extends('layouts.app')

@section('content')
<section>
    <h2>Non, mais tu l’as vu !</h2>
    <div>
        <a class="flex justify-center items-center" target="_blank" rel="noopener noreferrer" href="{{$project->link}}">
            <img class="w-full h-64 rounded-t-2xl" src="{{$project->thumbnail}}" height="100" width="100" alt="">
            <img class="absolute w-24 opacity-25 rounded-full border-2 shadow-lg group-hover:opacity-100" src="{{asset('assets/icons/play.svg')}}" alt="">
        </a>
    </div>
    <div>
        <p>
            <span class="text-green">Réalisé par : </span> 
            Muriel Loth et les enfants du Conseil Communal Consultatif de Colfontaine.
        </p>
        <p>
            <span class="text-green">Durée : </span>
            5’11’’
        </p>
        <p>
            <span class="text-green">Production : </span>
            2022
        </p>
        <p>
            <span class="text-green">Projet organisé par : </span>
            le Collège Communal de Colfontaine avec le soutien du service Hainaut Culture Tourisme.
        </p>
    </div>
</section>
@endsection
