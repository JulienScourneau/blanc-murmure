@props(['project'])
  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach($project->photo_list as $photo)
        <div class="swiper-slide">
          <img src="{{asset('storage/' . $photo)}}" alt="">
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </body>
