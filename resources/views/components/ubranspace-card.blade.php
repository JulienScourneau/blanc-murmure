@props(['project'])
<div>
    <div class="mx-auto my-6 rounded-xl h-32 w-8/12 hover:shadow-lg">
        <a 
            class="h-32 flex items-center bg-right bg-no-repeat bg-cover rounded-xl" 
            style="background-image: url('{{asset('assets/agenda_test.png')}}');" 
            href="/nos-projets/espace-urbain/{{$project->slug}}"
        >
            <h2 class="pl-10 Title font-black text-green text-2xl">{{$project->title}}</h2>
        </a>
    </div>
</div>
