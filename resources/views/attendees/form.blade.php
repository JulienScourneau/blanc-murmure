@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto p-4">
        <form method="POST" action="{{ route('inscription') }}" class="text-center">
            @csrf
            <x-input name="last_name" label="Nom"/>
            <x-input name="first_name" label="Prénom"/>
            <x-input name="email" type="email" label="Adresse email"/>
            <div>
                <label for="stage">Stage</label>
                <select name="stage_id" id="stage_id">

                    <option value="1">Test</option>
                    {{--                @foreach(App\Models\Category::all() as $category)--}}
                    {{--                    <option--}}
                    {{--                        value="{{$category->id}}"--}}
                    {{--                        {{old('category_id') == $category->id ? 'selected' : ''}}--}}
                    {{--                    >{{ucwords($category->name)}}--}}
                    {{--                    </option>--}}
                    {{--                @endforeach--}}
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

            <button class="bg-green text-white font-black text-center text-xl rounded-3xl w-10/12 py-4 mt-9" type="submit">
                {{ucwords("s'inscrire")}}
            </button>
        </form>
    </div>
@endsection
