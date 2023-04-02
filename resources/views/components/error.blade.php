@props(['name'])

@error($name)
<p class="text-sm mt-1 text-red">{{$message}}</p>
@enderror
