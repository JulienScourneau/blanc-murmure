@props(['project'])
  <body>
    <!-- Swiper -->
    <div class="swiperProject mySwiper">
      <div class="swiper-wrapper">
        @foreach($project->photo_list as $photo)
        <div class="swiper-slide">
          <img class="object-fill xl:w-9/12" src="{{asset('storage/' . $photo)}}" alt="">
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </body>
