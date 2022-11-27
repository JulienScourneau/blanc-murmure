@extends('layouts.app')

@section('content')
    <h2 class="uppercase text-center font-black text-2xl mt-6 mb-4">Des questions ?</h2>


    <form action="">
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10" for="nom">Nom</label>
            <input class="w-full rounded-full border-2 border-placeHolder p-5" type="text" id="nom">
        </div>
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10" for="mail">Email</label>
            <input class="w-full rounded-full border-2 border-placeHolder p-5" type="text" id="mail">
        </div>
        <div class="w-10/12 mx-auto py-2.5  ">
            <label class="flex self-start pl-10 my-2" for="">Vous venez pour :</label>
            <div class="flex mx-auto flex-col sm:flex-row">
                <div class="border-2 border-greenDuck rounded-full w-full sm:w-10/12 text-center  self-center p-5 sm:mr-4 mb-2 sm:mb-0">
                    <input type="radio" value="oui" id="yes" name="right_to_image">
                    <label for="yes">Un stage</label>
                </div>
                <div class="border-2 border-greenDuck rounded-full w-full sm:w-10/12 text-center self-center p-5">
                    <input type="radio" value="non" id="no" name="right_to_image">
                    <label for="no">Une collaboration</label>
                </div>
            </div>
            <x-error name="right_to_image"/>
        </div>
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10" for="message">Your message</label>
            <textarea class="w-full rounded-full border-2 border-placeHolder p-5" type="text" id="message"></textarea>
        </div>
        <div class="w-10/12 mx-auto">
            <button class="bg-green text-white font-black text-center text-xl rounded-full w-full py-4 mt-9"
                    type="submit">
                {{ucwords("s'inscrire")}}
            </button>
        </div>
    </form>
@endsection
