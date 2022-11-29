@extends('layouts.app')

@section('content')
<h2 class="Title font-black text-2xl text-center">Catalogue</h2>

<div class="flex flex-col w-10/12 mx-auto lg:flex-row w-8/12">
    @if($catalogs->count())
        @foreach($catalogs as $catalog)
        <x-project-card-catalogue :project="$catalog"/>
        @endforeach
    @else
    <p>Nothing to show</p>
    @endif
</div>



@endsection
