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
        <x-project-card :id="$key" :project="$illustration"/>
        <x-modalCarousel :project="$illustration"/>
    @endforeach
    @else
    <p>Nothing to show</p>
    @endif
</div>
@endsection
