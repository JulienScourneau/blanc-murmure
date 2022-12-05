<article class="bg-greenDuck mt-2.5 shadow-md w-11/12 mx-auto overflow-hidden lg:w-2/12">
    <img class="w-full" src="{{$internship->thumbnail}}" alt="">
    <div class="text-white p-2.5">
        <div class="mb-5">
            <h2 class="uppercase text-orange font-bold Title text-2xl">{{$internship->title}}</h2>
            <p>{{$internship->subtitle}}</p>
        </div>
        <div class="w-11/12">
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Quoi ?</h4>
                <p>{{$internship->description}}</p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Pour Qui ?</h4>
                <p>{{$internship->age}}</p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Quand ?</h4>

                <p>
                    <time>
                        @if(Carbon\Carbon::parse($internship->begin_at)->translatedFormat('F') != Carbon\Carbon::parse($internship->end_at)->translatedFormat('F'))

                            Du {{Carbon\Carbon::parse($internship->begin_at)->translatedFormat('d F')}}
                            au {{Carbon\Carbon::parse($internship->end_at)->translatedFormat('d F Y')}}
                        @else

                            Du {{Carbon\Carbon::parse($internship->begin_at)->translatedFormat('d')}}
                            au {{Carbon\Carbon::parse($internship->end_at)->translatedFormat('d F Y')}}
                        @endif

                    </time>
                    de {{Carbon\Carbon::parse($internship->begin_hour)->format('H:i')}}
                    à {{Carbon\Carbon::parse($internship->end_hour)->format('H:i')}}
                </p>
            </div>
            <div class="pb-1">
                <h4 class="Title text-lg font-bold">Prix ?</h4>
                <p>{{$internship->price}} €</p>
            </div>
        </div>
        <div class="flex justify-center">
            <button class="bg-orange text-white font-black text-center text-xl rounded-full w-48 py-3 mt-7 mb-3 border-2 border-orange hover:bg-white hover:text-orange">
                <a href="{{ Route('inscription') }}">
                    Inscrivez-vous !
                </a>
            </button>
        </div>
    </div>
</article>
