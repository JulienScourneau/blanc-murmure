@extends('layouts.app')

@section('content')

    <h1>Illu</h1>
    @foreach($projects as $project)
        <img src="{{$project->photos[0]->path}}" width="100" height="100" alt="">
    @endforeach
@endsection
