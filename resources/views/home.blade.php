@extends('layouts.app')

@section('content')

    @if(isset($internship))
        @include('components.banner', ['internship'=>$internship])
    @else
        {{-- TODO: Always need to show something, Add message --}}
        <p>Nothing to show</p>
    @endif
    <!-- <hr class="mt-12 text-separator"/>
    <h2 class="font-black text-3xl py-2.5 text-green">Nos activités</h2>
    <hr class="mb-6 w-48 shadow text-separator"/> -->
    <section class="w-full bg-greenDuck p-2.5 rounded-3xl lg:mx-auto ">
        <div class="flex flex-col lg:flex-row lg:w-full xl:w-10/12 mx-auto py-2.5">
            <article
                class="mx-auto overflow-hidden rounded-2xl items-center border-2 border-white w-full h-2/12 md:w-full md:mx-auto lg:w-10/12 lg:mx-2.5 my-2.5 group hover:bg-white">
                <a href="{{ Route ('news')}}">
                    <img class="w-full h-auto object-cover" src="{{asset('storage/'.$photos[0]->path)}}" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-xl md:text-2xl text-white group-hover:text-greenDuck">
                            Envie de créer ?</h2>
                        <p class="text-sm mb:text-base pt-2.5 font-normal text-white group-hover:text-greenDuck">
                            Découvrez les stages et les ateliers du moment et à venir.
                        </p>
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En
                            savoir plus ></p>
                    </div>
                </a>
            </article>
            <article
                class="mx-auto overflow-hidden rounded-2xl items-center border-2 border-white md:w-full md:mx-auto lg:w-10/12 lg:mx-2.5 my-2.5 group hover:bg-white">
                <a href="{{ Route ('collaborater')}}">
                    <img class="w-full md:w-full xl:w-full" src="{{asset('storage/'.$photos[1]->path)}}" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-xl text-white group-hover:text-greenDuck">Envie de
                            travailler avec nous?</h2>
                        <p class="text-sm mb:text-base pt-2.5 font-normal text-white group-hover:text-greenDuck">
                            Développer les collaborations, les concertations et réunir les forces
                            en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel
                            et
                            social de chacun.
                        </p>
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En
                            savoir plus ></p>
                    </div>
                </a>
            </article>
            <article
                class="mx-auto overflow-hidden rounded-2xl items-center border-2 border-white md:w-full md:mx-auto lg:w-10/12 lg:mx-2.5 group my-2.5 hover:bg-white">
                <a href="{{ Route ('project')}}">   
                    <img class="w-full md:w-full" src="{{asset('storage/'.$photos[2]->path)}}" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-xl text-white group-hover:text-greenDuck">Découvrir les
                            projets</h2>
                        <p class="text-sm mb:text-base pt-2.5 font-normal text-white group-hover:text-greenDuck">
                         Nous initions un public varié à l’art et la création contemporaine par le biais de
                         différentes techniques artistiques dans lesquelles chacun peut devenir créateur
                         et acteur de son projet.
                        </p>
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En
                            savoir plus ></p>
                    </div>
                </a>
            </article>
        </div>
    </section>
    @include('components.agenda',['agendas',$agendas])
@endsection
