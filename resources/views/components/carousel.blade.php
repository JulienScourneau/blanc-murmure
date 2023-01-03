<<<<<<< HEAD
@props(['project'])
=======
@props(['project','key'])
>>>>>>> 683620d018dc9b6badfd5c1783dddf5a01768b45
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
      .swiper {
        width: 80%;
        height: 80%;
      }
      .swiper-slide {
        text-align: center;
        font-size: 18px;
        height: 100%;
        display: flex;
        align-self: center;
        background: rgba(255, 255, 255);

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        /* width: 100%; */
        /* height: 100%; */
        object-fit: contain;
      }

      .swiper {
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
      }
    </style>
  </head>

  <body>
    <div class="swiper mySwiper" >
      <div class="swiper-wrapper">
        @if ($key+1 === $project->id) 
        @dump($key+1) 
        @dump($project->id)
          @foreach ($project->photo_list as $photo)  
            <div class="swiper-slide">
              <img class="w-52" src="{{asset("storage/".$photo)}}" alt="">
            </div>
          @endforeach
        @endif
        </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
<<<<<<< HEAD
</html>
                      storage/images/1kXO08UN8KrvNC3QmMhgKzctdTphFr-metaUDEwMTAyNjkuanBn-.jpg
http://127.0.0.1:8000/storage/images/3ciP7fuvL5SNrzF9efgKL34EE73csU-metaNTAweDUwMF9hcGFzaGVfZGVhZF95aXp6eS5qcGc=-.jpg
=======
</html>
>>>>>>> 683620d018dc9b6badfd5c1783dddf5a01768b45
