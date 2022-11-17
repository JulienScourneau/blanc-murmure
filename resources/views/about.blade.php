@extends('layouts.app')

@section('content')
    <h1 class="text-center font-black text-2xl py-2.5 text-green-300">A propos de blanc mumure</h1>
    <article class="card bg-green-300 w-11/12 rounded-3xl text-white p-6 leading-tight text-justify shadow">
        <p class="pb-4">
        Blanc Murmure est un Centre d’Expression et de Créativité (C.E.C.) reconnu par la Fédération Wallonie
        Bruxelles depuis 1998. 
        </p>
        <p class="pb-4">
        Nos stages, formations et ateliers sont organisés au sein de nos bâtiments
        à Quaregnon ou à l’extérieur, dans les institutions culturelles, sociales et scolaires en demande
        de nos compétences.
        </p>
        <p class="pb-4">
        En tant que CEC, Blanc Murmure poursuit des objectifs culturels et sociaux fondamentaux.
        </p>
        <p class="pb-4">
        Nous nous adressons à tout un chacun, petits et grands, handicapés et valides, ... sans demander de prérequis artistiques. Tel un laboratoire, on y expérimente, on y recherche son propre langage. Les contraintes et consignes proposées, loin de brider l’imaginaire, donnent la rigueur technique indispensable et poussent hors des retranchements. 
        </p>
        <p class="pb-4">
        Diversité culturelle, solidarité, développement durable, expression citoyenne sont pour nous des mots chargés de signification, déclinés chacun
        avec des accents particuliers.
        </p>
        <p>
        A Blanc Murmure, on est amené à côtoyer des personnes issues d’autres horizons, à relier les préoccupations du groupe à celles de la cité.
        </p>
    </article>

    <section class="contact__crew flex flex-col w-10/12 card">
        <h2 class="uppercase font-black text-2xl mt-10 mb-12 text-green-300">Notre équipe</h2>
        <div class="contact__illustration">
            <div class="contact__illustration__border rounded-l-3xl h-5 mb-4"></div>
            <div class="contact__illustration__background bg-green-300 h-20 rounded-l-3xl"></div>
        </div>
        <div class="mb-10">
            <img src="assets/eugenio.png" alt="">
            <p>Eugénio Furino - plasticien illustrateur</p>
        </div>
        <div class="mb-10">
            <p>Muriel Loth - coordinatrice vidéaste</p>
            <img src="assets/muriel.png" alt="">
        </div>
        <div>
            <img src="assets/boris.png" alt="">
            <p>Boris Grégoire - plasticien sculpteur</p>
        </div>
    </section>

    <h1 class="uppercase text-center font-black text-2xl mt-6 mb-4">
    Envie de nous rencontrer ? <span class="text-green-300 underline">contacter</span> nous !
    </h1>
@endsection
