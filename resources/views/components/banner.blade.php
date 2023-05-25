<section class="mx-auto w-full items-center text-center lg:flex flex-col justify-center">
  <div class="swiperBanner mySwiperBanner object-fill 2xl:w-9/12">
    <div class="swiper-wrapper">
      @foreach($internships as $internship)
      <div class="swiper-slide">
        <img class="object-fill xl:w-9/12" src="{{asset('storage/'.$internship->thumbnail)}}" alt="Bannière de Stage">
      </div>
        @endforeach
    </div>
    <!-- <div class="swiper-button-next"></div> -->
    <!-- <div class="swiper-button-prev"></div> -->
    <!-- <div class="swiper-pagination"></div> -->
  </div>

    <div class="flex justify-center">
        <h1 class="Title uppercase text-center font-black text-2xl p-2.5 my-6">
            Envie de faire <span class="text-orange underline cursor-pointer highlightOrange font-black Title">
                <a class="Title font-black" href="{{ Route('news') }}">un stage</a>
            </span>
            Créatif ? Voici le prochain !
        </h1>
        <!-- <h2 class="Title uppercase font-black text-xl leading-7">{{$internship->title}}</h2> -->
        <!-- <h5 class="text-orange text-xs mb-2">{{$internship->subtitle}}</h5> -->
        <!-- <div class="text-xs mb-10 w-2/2 lg:w-1/2 mx-auto">{!! $internship->description !!}</div> -->
        <a class="bg-orange rounded-3xl ml-12 self-center p-2.5 text-white text-xl border-orange hover:bg-white hover:text-orange hover:border-2"
           href="/en-ce-moment/#stage-et-ateliers">En savoir plus ></a>
    </div>
</section>
