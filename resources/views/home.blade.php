@extends('layouts.app')

@section('content')

    @if(isset($internship))
        @include('components.banner', ['internship'=>$internship])
    @else
        {{-- TODO: Always need to show something, Add message --}}
        <p class="mx-auto my-6 text-center">Aucun stage disponible pour le moment</p>
    @endif
    <!-- <hr class="mt-12 text-separator"/>
    <h2 class="font-black text-3xl py-2.5 text-green">Nos activités</h2>
    <hr class="mb-6 w-48 shadow text-separator"/> -->
    <section class="w-full bg-greenDuck p-2.5 rounded-3xl lg:mx-auto">
        <div class="flex flex-col lg:flex-row lg:w-full xl:w-10/12 mx-auto py-2.5">
            <x-ShortcutsToActivities :photos="asset('storage/'.$photos[0]->path)" title="Envie de créer ?" content="Découvrez les stages et les ateliers du moment et à venir." />
            <x-ShortcutsToActivities :photos="asset('storage/'.$photos[1]->path)" title="Envie de travailler avec nous?" content="Développer les collaborations, les concertations et réunir les forces en intégrant le public dans une dynamique de projet tout en favorisant l’épanouissement culturel et social de chacun." />
            <x-ShortcutsToActivities :photos="asset('storage/'.$photos[2]->path)" title="Découvrir les projets" content="Nous initions un public varié à l’art et la création contemporaine par le biais de différentes techniques artistiques dans lesquelles chacun peut devenir créateur et acteur de son projet." />
        </div>
    </section>
    @include('components.agenda',['agendas',$agendas])
@endsection
