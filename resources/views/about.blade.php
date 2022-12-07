@extends('layouts.app')

@section('content')
    <h1 class="text-center font-black text-2xl py-2.5 text-green lg:mt-10">A propos de blanc mumure</h1>
    <article class="card bg-green w-11/12 rounded-3xl p-6 leading-tight text-justify shadow lg:w-6/12">
        <p class="pb-4 text-white">
        Blanc Murmure est un Centre d’Expression et de Créativité (C.E.C.) reconnu par la Fédération Wallonie
        Bruxelles depuis 1998. 
        </p>
        <p class="pb-4 text-white">
        Nos stages, formations et ateliers sont organisés au sein de nos bâtiments
        à Quaregnon ou à l’extérieur, dans les institutions culturelles, sociales et scolaires en demande
        de nos compétences.
        </p>
        <p class="pb-4 text-white">
        En tant que CEC, Blanc Murmure poursuit des objectifs culturels et sociaux fondamentaux.
        </p>
        <p class="pb-4 text-white">
        Nous nous adressons à tout un chacun, petits et grands, handicapés et valides, ... sans demander de prérequis artistiques. Tel un laboratoire, on y expérimente, on y recherche son propre langage. Les contraintes et consignes proposées, loin de brider l’imaginaire, donnent la rigueur technique indispensable et poussent hors des retranchements. 
        </p>
        <p class="pb-4 text-white">
        Diversité culturelle, solidarité, développement durable, expression citoyenne sont pour nous des mots chargés de signification, déclinés chacun
        avec des accents particuliers.
        </p>
        <p class="text-white">
        A Blanc Murmure, on est amené à côtoyer des personnes issues d’autres horizons, à relier les préoccupations du groupe à celles de la cité.
        </p>
    </article>

    <section class="contact__crew mt-32">
        <h2 class="uppercase font-black text-2xl text-green ml-20">Notre équipe</h2>
        <div class="flex flex-col lg:flex-row w-10/12 2xl:justify-center mx-auto">
            <div class="contact__illustration__top">
                <div class="contact__illustration__top__border rounded-l-full h-5 mb-4"></div>
                <div class="contact__illustration__top__background bg-green h-20 rounded-l-full"></div>
            </div>
            <div class="mb-10 lg:mt-20 lg:p-5   ">
                <img class="w-full mx-auto lg:mx-2.5 flex" src="assets/eugenio.png" alt="">
                <p>Eugénio Furino - plasticien illustrateur</p>
            </div>
            <div class="mb-10 lg:mt-20 lg:p-5">
                <p>Muriel Loth - coordinatrice vidéaste</p>
                <img class="w-full mx-auto lg:mx-2.5 flex" src="assets/muriel.png" alt="">
            </div>
            <div class=" lg:mt-20 lg:p-5">
                <img class="w-full mx-auto lg:mx-2.5 flex" src="assets/boris.png" alt="">
                <p>Boris Grégoire - plasticien sculpteur</p>
            </div>
            <div class="contact__illustration__bottom">
                <div class="contact__illustration__bottom__background bg-green h-20 rounded-r-full"></div>
                <div class="contact__illustration__bottom__border rounded-r-full h-5 mt-4"></div>
            </div>
        </div>
    </section>

    <h1 class="uppercase text-center font-black text-4xl mt-52 mb-24">
    Envie de nous rencontrer ? <span class="text-green underline"><a href="{{ Route ('contact')}}">contacter</a></span> nous !
    </h1>
@endsection
