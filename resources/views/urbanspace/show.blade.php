@extends('layouts.app')

@section('content')
    <section class="my-10">
        <div class="flex flex-col lg:flex-row items-center justify-around md:w-11/12 lg:w-8/12 xl:w-6/12 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-greenDuck lg:w-4/12">{{$urbanSpaceProject->title}}</h1>
            <p class="text-greenDuck lg:w-8/12">{{$urbanSpaceProject->description}}</p>
        </div>
        @foreach($urbanSpaceProject->urbanSpace as $urbanSpace)
            <article class="shadow-lg my-10 md:mb-20 md:mx-auto md:w-11/12 lg:w-8/12 xl:w-6/12">
                {{-- @foreach($urbanSpace->photos as $photo)
                    <div class="bg-orange flex flex-row">
                        <img src="{{$photo->path}}" width="100" height="100" alt="">
                    </div>
                    @endforeach --}}
                <div class="flex flex-col lg:flex-row">
                    <img class="lg:w-3/6 HeightUrban object-cover"
                         src="{{asset("storage/".$urbanSpace->thumbnail_portrait)}}" alt="">
                    <div class="w-full lg:w-3/6">
                        <img class="w-full h-96 lg:h-52 object-cover"
                             src="{{asset("storage/".$urbanSpace->thumbnail_landscape)}}" alt="">
                        <div class="ml-5 my-5 p-2.5 border-green border-l-2 text-secondaryText">
                            <p>{{$urbanSpace->partnership}}</p>
                            <p>{{$urbanSpace->participant}}</p>
                            <p>{{$urbanSpace->author}}</p>
                        </div>
                    </div>
                </div>
                <div class="m-5">
                    <h2 class="Title text-2xl font-black text-orange rounded-2xl">{{$urbanSpace->title}}</h2>
                    <p class="py-2.5">{{$urbanSpace->location}}</p>
                    <div>{!! $urbanSpace->description !!}</div>
                </div>
                <div class="flex justify-end">
                    <button id={{ $urbanSpace->id }} class="buttonCarousel m-5 highlightOrange
                    ">Diaporama ></button>
                </div>
            </article>

            <x-modalCarousel :project="$urbanSpace"/>
        @endforeach

    </section>
@endsection
