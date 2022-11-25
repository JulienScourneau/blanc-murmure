@props(['project'])
<div>
    @if($project->photos->count())
        <img src="{{$project->photos[0]->path}}" height="100" width="100" alt="">
    @else
        <img src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    @endif
    <p>{{$project->title}}</p>
</div>
