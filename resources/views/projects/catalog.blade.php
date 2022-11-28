@extends('layouts.app')

@section('content')
<h2>Catalogue</h2>

<div class="flex flex-col w-10/12 mx-auto">
    @if($catalogs->count())
        @foreach($catalogs as $catalog)
        <x-project-card-catalogue :project="$catalog"/>
        @endforeach
    @else
    <p>Nothing to show</p>
    @endif
</div>



@endsection
