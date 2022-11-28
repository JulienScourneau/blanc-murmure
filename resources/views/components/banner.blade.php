
<section class="card w-11/12 items-center text-center xl:flex flex-row justify-center">
    <img src="assets/Fresque.png" alt="">
    <div class="">
        <h1 class="Title uppercase text-center font-black text-2xl mt-6 mb-4">
            Envie de faire <span class="text-orange underline cursor-pointer highlightOrange">
                <a href="{{ Route('news') }}">un stage</a>
            </span>
            Créatif ? Voici le prochain !
        </h1>
        <h2 class="Title uppercase font-black text-xl leading-7">{{$internship->title}}</h2>
        <h5 class="text-orange text-xs mb-6">En collaboration avec Le Collectif Innombrable</h5>
        <a class="bg-orange rounded-3xl p-2.5 text-white text-xl hover:bg-white hover:text-orange hover:border-orange hover:border-2" href="{{ Route ('news') }}">En savoir plus ></a>
    </div>
</section>
