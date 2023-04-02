@props(['photos', 'title', 'content'])
<article class="mx-auto lg:mx-2.5 my-2.5 rounded-2xl items-center border-2 border-white w-full h-10/12 lg:w-10/12 group hover:bg-white overflow-hidden">
                <a class="w-full h-full" href="{{ Route ('news')}}">
                    <div class="w-full h-52 bg-white">
                        <img class="w-full h-full object-cover" src="{{$photos}}" alt="">
                    </div>
                    <div class="p-2.5 h-2/12">
                        <h2 class="Title uppercase font-black text-xl md:text-2xl text-white group-hover:text-greenDuck">
                            {{$title}}
                        </h2>
                        <p class="text-sm mb:text-base pt-2.5 font-normal text-white group-hover:text-greenDuck">
                            {{$content}}
                        </p>
                        <p class="font-normal text-xs underline text-right pr-5 text-white group-hover:text-greenDuck">En
                            savoir plus ></p>
                    </div>
                </a>
            </article>