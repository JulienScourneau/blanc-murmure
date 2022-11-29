@props(['project'])
<div class="w-full mx-auto shadow-lg bg-greenDuck mb-5 rounded-2xl"> 
    <img class="rounded-t-2xl" src="{{asset('assets/project/project_catalogue_01.png')}}" alt="">
    <div class="text-white p-2.5">
        <h2 class="Title font-black size-2xl mb-2.5">{{$project->name}}</h2>
        <p class="border-l-2 border-white pl-2.5">{{$project->description}}</p>
        <div class="flex my-5">
            <p class="border-l-2 border-white pl-2.5">{{$project->pages}} 178 pages</p>
            <p class="border-l-2 border-white pl-2.5 ml-10">{{$project->taille}}20 x 20 cm</p>
        </div>
        <div class="flex justify-around">
            <a class="p-2.5 bg-orange rounded-full" href="">Aperçu ></a>
            <a class="p-2.5 ml-1 bg-orange rounded-full" href="">Commandez ></a>
        </div>
    </div>
</div>