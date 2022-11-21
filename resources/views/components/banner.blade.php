<h1 class="uppercase text-center font-black text-2xl mt-6 mb-4">
    Envie de faire <span class="text-green underline">un stage</span> Créatif ? Voici le prochain !
</h1>
<section class="card w-11/12 rounded-br-3xl shadow items-center">
    <img src="assets/Fresque.png" alt="">
    <div class="p-2.5">

        <h2 class="uppercase text-right font-black text-2xl leading-7">{{$stage->title}}</h2>
        <h5 class="text-right text-xs">En collaboration avec Le Collectif Innombrable</h5>
        <div>
            <p class="text-base font-bold">Quoi ?</p>
            <p class="text-base font-normal">
                {{$stage->description}}
            </p>
            <p class="text-base font-bold text-placeHolderText">Quand ?</p>
            <p class="text-base font-normal text-secondaryText">
                Du 24 au 28 octobre 2022
                de 09h00 à 16h00.
            </p>
            <p class="text-base font-bold text-placeHolderText">Pour qui ?</p>
            <p class="text-base font-normal text-secondaryText">
                Les Enfants de 8 à 12 ans.
            </p>
            <p class="text-base font-bold text-placeHolderText">Prix</p>
            <p class="text-base font-normal text-secondaryText">
                55 €
            </p>
            <p class="font-normal text-xs underline text-right pr-5 text-disableText">En savoir plus ></p>
        </div>
    </div>
</section>
