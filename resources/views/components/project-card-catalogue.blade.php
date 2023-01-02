@props(['project'])
<div class="w-full mx-auto shadow-lg bg-greenDuck mb-5 rounded-2xl lg:m-5">
    <img class="rounded-t-2xl" src="{{asset('storage/'.$project->thumbnail)}}" alt="">
    <div class="text-white p-2.5">
        <h2 class="Title font-black size-2xl mb-2.5">{{$project->title}}</h2>
        <p class="border-l-2 border-white pl-2.5 lg:h-20">{{$project->description}}</p>
        <div class="flex my-5">
            <p class="border-l-2 border-white pl-2.5">{{$project->page_number}} pages</p>
            <p class="border-l-2 border-white pl-2.5 ml-10">{{$project->size}}</p>
        </div>
        <div class="flex justify-around">
            <a class="px-2.5 py-1 bg-orange rounded-full border-2 border-orange hover:bg-white hover:text-orange"
               href="https://www.publier-un-livre.com/fr/le-livre-en-papier/2125-vertige">Aperçu ></a>
            <a class="px-2.5 py-1 ml-1 bg-orange rounded-full border-2 border-orange hover:bg-white hover:text-orange"
               href="{{$project->link}}"
               target="_blank" rel="noopener noreferrer"
            >Commandez ></a>
        </div>
    </div>
</div>
