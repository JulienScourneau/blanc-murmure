@extends('layouts.app')

@section('content')
<x-banner-project 
    src="{{asset('assets/project/project_catalogue_banner.png')}}" 
    text="Nos catalogues sont les miroirs d’un vécu. Ils nous permettent une rétrospective de nos projets
    et par-là même nous donnent l’opportunité de nous réinventer, d’évoluer, d’échanger.
    Véritables archives vivantes, c’est une trace de notre parcours ainsi qu’un moyen de transmission vers autrui." 
/>

<div class="flex flex-col lg:flex-row mx-auto w-10/12 lg:w-12/12">
    @if($catalogs->count())
        @foreach($catalogs as $catalog)
        <x-project-card-catalogue :project="$catalog"/>
        @endforeach
    @else
    <p>Nothing to show</p>
    @endif
</div>



@endsection
