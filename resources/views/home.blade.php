@extends('layouts.app')

@section('content')
    @include('components.banner', ['stage'=>$stage])
    <hr class="mt-12 text-separator"/>
    <h2 class="font-black text-3xl py-2.5 text-green">Nos activités</h2>
    <hr class="mb-6 w-48 shadow text-separator"/>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img src="assets/stage.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Nos stages et ateliers</h2>
            <p class="text-base font-normal text-secondaryText">
                Découvrez les stages et les ateliers du moment et à venir.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-disableText">En savoir plus ></p>
        </div>
    </article>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img src="assets/collab.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Envie de travailler avec nous ?</h2>
            <p class="text-base font-normal text-secondaryText">
                Développer les collaborations, les concertations et réunir les forces
                en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel et
                social de chacun.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-disableText">En savoir plus ></p>
        </div>
    </article>
    <article class="card w-11/12 rounded-3xl shadow items-center">
        <img class="w-full" src="assets/project.png" alt="">
        <div class="p-2.5">
            <h2 class="uppercase font-black text-2xl leading-7">Découvrir les projets</h2>
            <p class="text-base font-normal text-secondaryText">
                Nous initions un public varié à l’art et la création contemporaine par le biais de
                différentes techniques artistiques dans lesquelles chacun peut devenir créateur
                et acteur de son projet.
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-disableText">En savoir plus ></p>
        </div>
    </article>
    <<<<<<< HEAD
    @include('components.agenda',['agenda',$agenda])
    @include('components.footer')
    =======
    @include('components.agenda')
    >>>>>>> 60b46d2e1f2e13c02f87d205dda59930fbe02cd6
@endsection
