@extends('layouts.app')

@section('content')
<section class="my-10">
    <div class="flex flex-col items-center justify-around">
        <h1 class="text-3xl font-semibold text-center text-greenDuck lg:w-4/12">{{$urbanSpaceProject->title}}</h1>
        <p class="text-greenDuck lg:w-8/12">{{$urbanSpaceProject->description}}</p>
    </div>
    @foreach($urbanSpaceProject->urbanSpace as $urbanSpace)
    <article class="shadow-lg my-10">
        {{-- @foreach($urbanSpace->photos as $photo)
            <div class="bg-orange flex flex-row">
                <img src="{{$photo->path}}" width="100" height="100" alt="">
            </div>    
            @endforeach --}} 
    <div class="flex flex-col">
        <img src="{{asset("storage/".$urbanSpace->thumbnail_portrait)}}" alt="">
        <div>
            <img src="{{asset("storage/".$urbanSpace->thumbnail_landscape)}}" alt="">
            <div class=" ml-5 my-5 p-2.5 border-green border-l-2 text-secondaryText">
                <p>{{$urbanSpace->partnership}}</p>
                <p>{{$urbanSpace->author}}</p>
            </div>
        </div>
    </div>
    <div class="m-5">
        <h2 class="Title text-2xl font-black text-orange rounded-2xl">{{$urbanSpace->title}}</h2>
        <p class="py-2.5">{{$urbanSpace->location}}</p>
        <p>{{$urbanSpace->description}}</p>
    </div>
    <div class="flex justify-end">
        <button class="m-5g">Diaporama ></button>
    </div>
    </article>
    @endforeach
    
</section>
@endsection
