@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold">{{$urbanSpaceProject->title}}</h1>
    @foreach($urbanSpaceProject->urbanSpace as $urbanSpace)
        <h2 class="text-lg font-semibold">{{$urbanSpace->title}}</h2>
        @foreach($urbanSpace->photos as $photo)
            <img src="{{$photo->path}}" width="100" height="100" alt="">
        @endforeach
    @endforeach
@endsection
