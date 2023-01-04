@extends('layouts.app')

@section('content')
<x-banner-project 
    src="{{asset('assets/project/project_illustration_banner_2.png')}}" 
    text="L’illustration
        c’est s’éveiller à la représentation, figurative ou non, de ce qui nous entoure. Un regard, une forme, une couleur, 
        autant d’outils pour créer un livre-objet, une peinture murale, une image." 
/>

<div class="flex flex-col mx-auto lg:flex-row flex-wrap justify-center">
@if($illustrations->count())
    @foreach($illustrations as $key=> $illustration)
        <x-project-card :project="$illustration"/>
        <div id="{{ $illustration->id }}" class="bg-green w-52 h-auto">
            <div>
                <img id="closeCarousel" class="w-16 opacity-30 hover:cursor-pointer hover:opacity-100" src="{{asset("assets/icons/close.svg")}}" alt="">
            </div>
            <x-carousel :project="$illustration"/>
        </div>
    @endforeach
    @else
    <p>Nothing to show</p>
    @endif
</div>
@endsection
