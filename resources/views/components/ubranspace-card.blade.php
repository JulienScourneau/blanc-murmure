@props(['project'])
<div>
    <div class="mx-auto my-6 w-8/12 h-24 group relative overflow-hidden hover:shadow-lg">
        <a href="/nos-projets/espace-urbain/{{$project->slug}}">
            <img class="w-full" src="{{asset('assets/agenda_test.png')}}" alt="">
            <h2 class="absolute top-1/3 left-10 Title font-black text-2xl">{{$project->title}}</h2>
        </a>
    </div>
</div>
