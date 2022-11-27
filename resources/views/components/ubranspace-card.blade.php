@props(['project'])
<div>
    <div class="mx-auto my-6 rounded-l border border-greenDuck ">
        <a href="/nos-projets/espace-urbain/{{$project->slug}}">
            <h2>{{$project->title}}</h2>

        </a>
    </div>
</div>
