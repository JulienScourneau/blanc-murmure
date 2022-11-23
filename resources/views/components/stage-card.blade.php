<article class="bg-greenDuck m-2.5 shadow-md">
    <img src="{{$stage->thumbnail}}" alt="">
    <div class="text-white p-2.5">
        <div class="mb-5">
            <h2 class="uppercase text-orange font-bold Title text-2xl">{{$stage->title}}</h2>
            <p>{{$stage->subtitle}}</p>
        </div>
        <div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Quoi ?</h4>
                <p>{{$stage->description}}</p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Pour Qui ?</h4>
                <p>{{$stage->age}}</p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Quand ?</h4>

                <p>Du {{date('d',strtotime($stage->begin_at))}} au {{Carbon\Carbon::parse($stage->end_at)->format('d F Y')}}
                    de 09h00 à 16h00</p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Prix ?</h4>
                <p>{{$stage->price}}</p>
            </div>
        </div>
        <div class="flex justify-center">
            <button class="bg-orange text-white font-black text-center text-xl rounded-full w-48 py-3 mt-7 mb-3">Inscrivez-vous !</button>
        </div>
    </div>
</article>
