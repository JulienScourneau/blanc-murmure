@props(['project'])

<div class="">
    <div class="mx-auto my-6 h-32 w-full lg:w-8/12 hover:shadow-lg">
        <a class="gradient h-32 flex bg-right bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('storage/' . $project->thumbnail) }}');"
            href="/nos-projets/espace-urbain/{{ $project->slug }}">
            <div class="h-full w-full flex items-center">
                <h2 class="pl-10 Title uppercase font-black text-white text-2xl relative z-50">
                    {{ $project->title }}</h2>
            </div>
        </a>
    </div>
</div>
