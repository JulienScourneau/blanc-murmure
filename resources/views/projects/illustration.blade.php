@extends('layouts.app')

@section('content')
<x-banner-project 
    src="{{asset('assets/project/project_illustration_banner.png')}}" 
    text="L’illustration
        c’est s’éveiller à la représentation, figurative ou non, de ce qui nous entoure. Un regard, une forme, une couleur, 
        autant d’outils pour créer un livre-objet, une peinture murale, une image." 
/>

<div class="flex flex-col w-10/12 mx-auto">
@if($illustrations->count())
    @foreach($illustrations as $illustration)
        <x-project-card :project="$illustration"/>
    @endforeach
@else
<p>Nothing to show</p>
@endif
</div>

    {{-- @foreach($projects as $project)
        <img src="{{$project->photos[0]->path}}" width="100" height="100" alt="">
    @endforeach --}}
@endsection
