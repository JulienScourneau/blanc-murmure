@extends('layouts.app')

@section('content')

    <h1 class="text-xl font-semibold">Espace</h1>
    @foreach($projects as $project)
        <x-ubranspace-card :project="$project"/>
    @endforeach


@endsection
