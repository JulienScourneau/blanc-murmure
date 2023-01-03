
<section class="mx-auto w-11/12 my-10 items-center text-center lg:flex flex-row justify-center">
    <img class="w-full lg:w-8/12 h-auto object-cover mx-auto xl:w-6/12" src="{{asset('storage/'.$internship->thumbnail)}}" alt="">
    <div class="">
        <h1 class="Title uppercase text-center font-black text-3xl p-2.5 mt-6 mb-10">
            Envie de faire <span class="text-orange underline cursor-pointer highlightOrange font-black Title">
                <a class="Title font-black" href="{{ Route('news') }}">un stage</a>
            </span>
            Créatif ? Voici le prochain !
        </h1>
        <h2 class="Title uppercase font-black text-xl leading-7">{{$internship->title}}</h2>
        <h5 class="text-orange text-xs mb-2">{{$internship->subtitle}}</h5>
        <p class=" text-xs mb-10 w-1/2 mx-auto">{{ $internship->description }}</p>
        <a class="bg-orange rounded-3xl p-2.5 text-white text-xl hover:bg-white hover:text-orange hover:border-orange hover:border-2" href="/en-ce-moment/#stage-et-ateliers">En savoir plus ></a>
    </div>
</section>
