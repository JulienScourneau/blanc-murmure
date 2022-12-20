@props(['project'])

<div class="">
    <div class="mx-auto my-6 h-52 w-full lg:w-8/12 group hover:shadow-lg">
        <a 
            class="gradient h-52 flex bg-right bg-no-repeat bg-cover" 
            style="background-image: url('{{asset('assets/agenda_test.png')}}');" 
            href="/nos-projets/espace-urbain/{{$project->slug}}"
        >
            <div class="h-full w-full flex flex-col items-left justify-center">
                {{-- TODO: Transform Title --}}
                <h2 class="pl-10 Title uppercase font-black text-white text-2xl relative z-50 opacity-0 group-hover:opacity-100 transition-all group-hover:duration-700">{{$project->title}}</h2>
                <p class="pl-10 text-white text-xl relative z-50 opacity-0 group-hover:opacity-100 transition-all group-hover:duration-700">{{$project->description}}</p>
            </div>
        </a>
    </div>
</div>