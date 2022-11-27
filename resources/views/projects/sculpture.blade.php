@extends('layouts.app')

@section('content')
<x-banner-project 
    src="{{asset('assets/project/project_illustration_banner.png')}}" 
    text="La Sculpture
        c’est s’éveiller à la représentation, figurative ou non, de ce qui nous entoure. Un regard, une forme, une couleur, 
        autant d’outils pour créer un livre-objet, une peinture murale, une image." 
/>

<div class="flex flex-col w-10/12 mx-auto">
@if($sculptures->count())
    @foreach($sculptures as $sculpture)
        <x-project-card :project="$sculpture"/>
    @endforeach
@else
<p>Nothing to show</p>
@endif
</div>
@endsection
