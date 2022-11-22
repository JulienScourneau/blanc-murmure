@extends('layouts.app')

@section('content')
    <h1>Project</h1>

    <h2>Sculpture</h2>
    @foreach($projects as $project)

        @if($project->category->title == 'Sculpture')
            <img src="{{$project->photos[0]->path}}" height="100" width="100" alt="">
            <p>{{$project->title}}</p>

        @endif

    @endforeach
    <h2>Illustration</h2>
    @foreach($projects as $project)
        @if($project->category->title == 'Illustration')
            <p>{{$project->title}}</p>

        @endif
    @endforeach

@endsection
