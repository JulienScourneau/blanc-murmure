@extends('layouts.app')

@section('content')

    <section class="shadow lg:flex w-10/12 mx-auto my-10">
        <img src="assets/stage/mercredi_1.png" alt="">
        <div>
            <div class="flex w-1/2">
                <img class="mx-2" src="assets/stage/mercredi_2.png" alt="">
                <img src="assets/stage/mercredi_3.png" alt="">
            </div>
            <div class="p-2.5">
                <h2 class="Title text-orange text-2xl font-black py-5">Mecredi s'éveille</h2>
                <p class="font-normal">
                    <span class="Title text-base font-semibold">L’atelier se déroule de
                    <span class="Title text-orange text-2xl font-black">fin septembre à début juin</span> à raison d’une fois par semaine.</span>

                </p>
                <p>
                    Nous veillons à ce que le fond et la forme s’épousent dans un projet commun.
                    Nos ateliers se présentent comme autant de petits laboratoires de recherche pour que chaque
                    technique, chaque thème se développent au gré des démêlés.
                </p>
            </div>
            <div class="flex justify-center lg:justify-end items-end h-2/6 pr-5 pb-12">
                <button class="bg-orange text-white font-black text-center text-xl rounded-full w-48 py-4 mt-7 border-2 hover:bg-white hover:text-orange">
                    <a href="{{ Route('inscription') }}">
                        Inscrivez-vous !
                    </a>
                </button>
            </div>
        </div>
    </section>
    <section id="stage-et-ateliers" class="mt-10">
        <div class="bg-greenDuck p-2.5 text-white mb-2.5">
            <h2 class="Title text-2xl font-black">Les stages et ateliers</h2>
            <p>
                <span class="font-black">Nous programmons des stages durant les <span class="text-2xl">vacances</span> scolaires.</span>
            <p>
                Les enfants sont immergés durant une semaine dans le monde de la création. Les contraintes positives et
                ludiques permettent de structurer l’atelier en vue de favoriser l’imaginaire.
            </p>
            </p>
        </div>
        <div class="w-full lg:flex flex-wrap w-10/12 mx-auto">
            @if($internships->count())
                @foreach($internships as $internship)
                    @include('components.internship-card',[$internship])
                @endforeach
            @else
                <div class="max-w-7xl">
                    <p class="text-center">Aucun stage pour le moment</p>
                </div>
            @endif
        </div>
    </section>
@endsection
<span></span>
