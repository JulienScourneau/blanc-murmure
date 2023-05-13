@props(['project'])

<div class="mb-8">
    <div class="mx-auto my-6 h-52 w-full lg:w-8/12 hover:shadow-lg">
        <a class="gradient h-52 flex bg-right bg-no-repeat bg-cover"
           style="background-image: url('{{ asset('storage/' . $project->thumbnail) }}');"
           href="/nos-projets/espace-urbain/{{ $project->slug }}">
            <div class="h-full w-full flex flex-col items-left justify-center">
                <h2 class="pl-10 Title uppercase font-black text-white text-2xl relative z-50">{{ $project->title }}</h2>
                <div class="pl-10 text-white text-xl relative z-50">{!! $project->description !!}</div>
            </div>
        </a>
    </div>
</div>
