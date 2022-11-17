@extends('layouts.app')

@section('content')
    @include('components.banner')
    <hr class="mt-12"/>
    <h2 class="font-black text-3xl py-2.5 text-green-300">Nos activités</h2>
    <hr class="mb-6 w-48 shadow"/>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img src="assets/stage.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Nos stages et ateliers</h2>
            <p class="text-base font-normal">
                Découvrez les stages et les ateliers du moment et à venir.
            </p>
            <p class="font-normal text-xs underline text-right pr-5">En savoir plus ></p>
        </div>
    </article>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img src="assets/collab.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Envie de travailler avec nous ?</h2>
            <p class="text-base font-normal">
                Développer les collaborations, les concertations et réunir les forces
                en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel et
                social de chacun.
            </p>
            <p class="font-normal text-xs underline text-right pr-5">En savoir plus ></p>
        </div>
    </article>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img class="w-full" src="assets/project.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Découvrir les projets</h2>
            <p class="text-base font-normal">
                Nous initions un public varié à l’art et la création contemporaine par le biais de
                différentes techniques artistiques dans lesquelles chacun peut devenir créateur
                et acteur de son projet.
            </p>
            <p class="font-normal text-xs underline text-right pr-5">En savoir plus ></p>
        </div>
    </article>
    @include('components.agenda')
    @include('components.footer')
@endsection
