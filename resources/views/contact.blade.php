@extends('layouts.app')

@section('content')
    <h2 class="uppercase text-center font-black text-2xl mt-6 mb-4">Des questions ?</h2>
    
    
    <form action="">
    <div class="field">
        <label for="nom">Nom</label>
        <input type="text"  id="nom" >
    </div>
    <div class="field">
        <label for="mail">Email</label>
        <input type="text"  id="mail" >
    </div>
    <fieldset class="border-2 border-placeHolder rounded-3xl w-10/12 card p-2.5">
        <legend>Vous venez pour :</legend>
    
        <div>
          <input type="radio" id="stage" name="drone" value="stage"
                 checked>
          <label for="stage">stage</label>
        </div>
    
        <div>
          <input type="radio" id="Collaborateur" name="drone" value="Collaborateur">
          <label for="Collaborateur">Collaborateur</label>
        </div>
    </fieldset>
    <div class="field">
        <label for="message">Your message</label>
        <textarea type="text"  id="message" ></textarea>
    </div>
    </form>
@endsection
