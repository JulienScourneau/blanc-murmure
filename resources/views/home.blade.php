@extends('layouts.app')

@section('content')
    @include('components.banner', ['stage'=>$stage])
    <!-- <hr class="mt-12 text-separator"/>
    <h2 class="font-black text-3xl py-2.5 text-green">Nos activités</h2>
    <hr class="mb-6 w-48 shadow text-separator"/> -->
    <section class="home__section bg-greenDuck p-2.5 rounded-3xl">
    <article class="card rounded-2xl items-center border-2 border-white">
        <img class="rounded-t-2xl" src="assets/stage.png" alt="">
        <div class="p-2.5">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white">Nos stages et ateliers</h2>
            <p class="text-base font-normal text-white">
                Découvrez les stages et les ateliers du moment et à venir.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-white">En savoir plus ></p>
        </div>
    </article>
    <article class="card rounded-2xl items-center border-2 border-white">
        <img class="rounded-t-2xl" src="assets/collab.png" alt="">
        <div class="p-2.5">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white">Envie de travailler avec nous ?</h2>
            <p class="text-base font-normal text-white">
                Développer les collaborations, les concertations et réunir les forces
                en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel et
                social de chacun.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-white">En savoir plus ></p>
        </div>
    </article>
    <article class="card rounded-2xl items-center border-2 border-white">
        <img class="rounded-t-2xl" class="w-full" src="assets/project.png" alt="">
        <div class="p-2.5">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white">Découvrir les projets</h2>
            <p class="text-base font-normal text-white">
                Nous initions un public varié à l’art et la création contemporaine par le biais de
                différentes techniques artistiques dans lesquelles chacun peut devenir créateur
                et acteur de son projet.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-white">En savoir plus ></p>
        </div>
    </article>
    </section>
    @include('components.agenda',['agendas',$agendas])
@endsection
