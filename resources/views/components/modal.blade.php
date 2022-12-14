<div id="carouselModal" class="fixed z-50 w-full h-full bg-white top-0 left-0 flex flex-col py-2" style="display: none">
    <div class="absolute top-2.5 right-2.5 lg:top-2.5 lg:right-2.5">
        <img id="closeCarousel" class="w-16 opacity-30 hover:cursor-pointer hover:opacity-100" src="{{asset("assets/icons/close.svg")}}" alt="">
    </div>
    <div class="mt-20 lg:mt-0">
        <x-carousel />
    </div>
</div>