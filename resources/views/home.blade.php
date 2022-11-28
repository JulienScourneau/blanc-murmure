@extends('layouts.app')

@section('content')

    @if(isset($internship))
        @include('components.banner', ['internship'=>$internship])
    @else
        {{-- TODO: Add banner for event? --}}
        {{-- TODO: Always need to show something --}}
        <p>Nothing to show</p>
    @endif
    <!-- <hr class="mt-12 text-separator"/>
    <h2 class="font-black text-3xl py-2.5 text-green">Nos activités</h2>
    <hr class="mb-6 w-48 shadow text-separator"/> -->
    <section class="bg-greenDuck p-2.5 rounded-3xl xl:mx-auto">
        <div class="flex flex-col xl:flex-row xl:w-6/12 mx-auto py-2.5">
            <article class="rounded-2xl items-center border-2 border-white group hover:bg-white text-greenDuck xl:w-4/12 mx-2.5">
                <a href="{{ Route ('news')}}">
                    <img class="rounded-t-2xl xl:w-full" src="assets/stage.png" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-2xl leading-7 text-white group-hover:text-greenDuck">Envie de créer ?</h2>
                        <p class="text-base font-normal text-white group-hover:text-greenDuck">
                            Découvrez les stages et les ateliers du moment et à venir.
                        </p>
                        {{-- TODO: Add link --}}
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En savoir plus ></p>
                    </div>
                </a>
            </article>
            <article class="mx-auto rounded-2xl items-center border-2 border-white xl:w-4/12 mx-2.5 group hover:bg-white">
                <a href="{{ Route ('collaborater')}}">
                    <img class="rounded-t-2xl xl:w-full" src="assets/collab.png" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-2xl leading-7 text-white group-hover:text-greenDuck">Envie de travailler avec nous ?</h2>
                        <p class="text-base font-normal text-white group-hover:text-greenDuck">
                            Développer les collaborations, les concertations et réunir les forces
                            en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel et
                            social de chacun.
                        </p>
                        {{-- TODO: Add link --}}
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En savoir plus ></p>
                    </div>
                </a>
            </article>
            <article class="mx-auto rounded-2xl items-center border-2 border-white xl:w-4/12 mx-2.5 group hover:bg-white">
                <a href="{{ Route ('project')}}">
                    <img class="rounded-t-2xl w-full " src="assets/project.png" alt="">
                    <div class="p-2.5">
                        <h2 class="Title uppercase font-black text-2xl leading-7 text-white group-hover:text-greenDuck">Découvrir les projets</h2>
                        <p class="text-base font-normal text-white group-hover:text-greenDuck">
                            Nous initions un public varié à l’art et la création contemporaine par le biais de
                            différentes techniques artistiques dans lesquelles chacun peut devenir créateur
                            et acteur de son projet.
                        </p>
                        {{-- TODO: Add link --}}
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En savoir plus ></p>
                    </div>
                </a>
            </article>
        </div>
    </section>
    @include('components.agenda',['agendas',$agendas])
@endsection
