@extends('layouts.app')

@section('content')
    <section class="shadow">
        <img src="assets/stage/mercredi_1.png" alt="">
        <div>
            <div class="flex w-1/2">
                <img src="assets/stage/mercredi_2.png" alt="">
                <img src="assets/stage/mercredi_3.png" alt="">
            </div>
            <div class="p-2.5">
                <h2 class="Title text-orange text-2xl font-black">Mecredi s'éveille</h2>
                <p class="font-normal">
                    <span class="Title text-base font-semibold">L’atelier se déroule de 
                    <span class="Title text-orange text-2xl font-black">fin septembre à début juin</span> à raison d’une fois par semaine.</span>
                    <p>
                        Nous veillons à ce que le fond et la forme s’épousent dans un projet commun.
                        Nos ateliers se présentent comme autant de petits laboratoires de recherche pour que chaque technique, chaque thème se développent au gré des démêlés.
                    </p>
                </p>
                <div class="flex justify-center">
                    <button class="bg-orange text-white font-black text-center text-xl rounded-full w-48 py-4 mt-7">Inscrivez-vous !</button>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="bg-greenDuck p-2.5 text-white mb-2.5">
            <h2 class="Title text-2xl font-black">Les stages et ateliers</h2>
            <p>
                <span class="font-black">Nous programmons des stages durant les <span class="text-2xl">vacances</span> scolaires.</span>
                <p>
                    Les enfants sont immergés durant une semaine dans le monde de la création. Les contraintes positives et ludiques permettent de structurer l’atelier en vue de favoriser l’imaginaire.
                </p>
            </p>
        </div>
        @include('components.card')
    </section>
@endsection
<span></span>
