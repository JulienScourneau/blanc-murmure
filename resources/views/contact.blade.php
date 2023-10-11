@extends('layouts.app')

@section('content')
    <h2 class="uppercase text-center font-black text-2xl mt-6 mb-4">Des questions ?</h2>


    <form class="lg:w-10/12 xl:w-8/12 2xl:w-6/12 lg:mx-auto" method="POST" action="{{ route('contact') }}">
        @csrf
        @honeypot
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10 my-2" for="name">Nom</label>
            <input class="w-full rounded-full border-2 border-disableText p-5" name="name" type="text" id="name">
        </div>
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10 my-2" for="email">Email</label>
            <input class="w-full rounded-full border-2 border-disableText p-5" name="email" type="email" id="email">
        </div>
        <div class="w-10/12 mx-auto py-2.5  ">
            <label class="flex self-start pl-10 my-2" for="">Vous venez pour :</label>
            <div class="flex mx-auto flex-col sm:flex-row">
                <div
                    class="border-2 border-disableText rounded-full w-full sm:w-10/12 text-center  self-center p-5 sm:mr-4 mb-2 sm:mb-0">
                    <input type="radio" value="stage" id="yes" name="reason">
                    <label for="yes">Un stage</label>
                </div>
                <div class="border-2 border-disableText rounded-full w-full sm:w-10/12 text-center self-center p-5">
                    <input type="radio" value="collaboration" id="no" name="reason">
                    <label for="no">Une collaboration</label>
                </div>
            </div>
            {{--            <x-error name="right_to_image"/>--}}
        </div>
        <div class="w-10/12 mx-auto py-2.5">
            <label class="text-primaryText flex self-start pl-10 my-2" for="message">Votre message</label>
            <textarea class="w-full rounded-3xl border-2 border-disableText p-5 resize-none h-48" name="message" type="text"
                      id="message"></textarea>
        </div>
        <div class="w-10/12 mx-auto">
            <button class="bg-green text-white font-black text-center text-xl rounded-full w-full py-4 mt-9 hover:text-green hover:bg-white active:border-2"
                    type="submit">
                {{ucwords("envoyer")}}
            </button>
        </div>
    </form>
@endsection
