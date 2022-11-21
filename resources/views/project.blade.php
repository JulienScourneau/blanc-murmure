@extends('layouts.app')

@section('content')
    <h1>Project</h1>

    @foreach($projects as $project)
        <h2>{{$project->category}}</h2>
    @endforeach

@endsection
