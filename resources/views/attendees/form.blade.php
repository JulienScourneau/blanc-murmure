@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto p-4">
        <div class="my-5">
            <div class="flex flex-col">
                <hr class="w-11/12 border-2 rounded-full">
                <hr class="my-2.5 w-11/12 text-green border-2 rounded-full flex self-end">
                <h2 class="Title uppercase text-center font-black text-2xl">Merci de compléter ce formulaire pour toutes
                    inscriptions</h2>
                <hr class="my-2.5 w-7/12 border-2 rounded-full shadow mx-auto mr-28">
                <hr class="w-8/12 text-green border-2 rounded-full shadow mx-auto ml-20">
            </div>
            <div class="font-light text-center mt-5">
                <p>Les inscriptions seront effectives dès réception du paiement sur notre compte :</p>
                <div class="flex justify-center mt-2.5">
                    <p class="mr-2.5">IBAN : BE25 0682 2499 7082</p>
                    <p>BIC : GKCCBEBB</p>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-2xl mx-auto">
        <form method="POST" action="{{ route('postInscription') }}" class="text-center">
            @csrf
            <x-input name="last_name" label="Nom"/>
            <x-input name="first_name" label="Prénom"/>
            <x-input name="email" type="email" label="Adresse email"/>
            <div class="flex flex-col mx-auto w-10/12">
                <label class="text-primaryText flex self-start pl-8 my-2" for="stage_id">Stage</label>
                <select class="rounded-full border-2 border-disableText p-5 hover:cursor-pointer" name="internship_id" id="stage_id">
                    <option value="">Choisi ton stage</option>
                    <option value="0">Mercredi s'éveille</option>
                    @foreach($internships as $internship)
                        <option
                            value="{{$internship->id}}"
                            {{old('category_id') == $internship->id ? 'selected' : ''}}
                        >{{ucwords($internship->title)}}
                        </option>
                    @endforeach
                </select>
                <x-error name="stage"/>

            </div>
            <x-input name="date_birth" type="date" label="Date de naissance"/>
            <x-input name="parent_name" label="Nom du parent"/>
            <x-input name="relationship" label="Lien de parenté"/>
            <x-input name="address" label="Rue"/>
            <x-input name="postal_code" label="Code postal"/>
            <x-input name="city" label="Ville"/>
            <x-input name="phone_number" label="Téléphone"/>
            <x-radio-button/>

            <button class="bg-green text-white font-black text-center text-xl rounded-full w-10/12 py-4 mt-9 border-2 hover:bg-white hover:text-green"
                    type="submit">
                {{ucwords("s'inscrire")}}
            </button>
        </form>
        <p class="mt-2.5 mx-auto w-10/12 text-xs font-light text-justify">
            (1) Les photos prises durant le stage et les vidéos filmées pourraient être utilisées à des fins de
            communication
            (édition, exposition, site internet de blanc murmure asbl,…), dans un but culturel et non commercial.
        </p>
    </div>
@endsection
