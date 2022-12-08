@extends('layouts.app')

@section('content')
<section class="my-52">
    <h1 class="text-3xl font-semibold">{{$urbanSpaceProject->title}}</h1>
    @foreach($urbanSpaceProject->urbanSpace as $urbanSpace)
    @foreach($urbanSpace->photos as $photo)
    <div class="bg-orange">
        <img src="{{$photo->path}}" width="100" height="100" alt="">
    </div>    
    @endforeach
    <div>
        <p>{{$urbanSpace->participation}}</p>
        <p>{{$urbanSpace->author}}</p>
        <p>{{$urbanSpace->parternship}}</p>
    </div>
    <div>
        <h2 class="Title text-2xl font-black rounded-2xl bg-greenDuck p-5">{{$urbanSpace->title}}</h2>
        <p>{{$urbanSpace->location}}</p>
        <p>{{$urbanSpace->description}}</p>
    </div>
    <div>
        <a href="">Diaporama ></a>
    </div>
    @endforeach
    
</section>
@endsection
