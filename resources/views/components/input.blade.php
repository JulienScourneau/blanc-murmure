@props(['name','label'])
<div>
    <x-label for="{{$name}}" name="{{$label}}"></x-label>
    <input
        class="border border-gray-300 p-2 w-full rounded"
        name="{{$name}}"
           id="{{$name}}"
    {{$attributes(['value'=>old($name)])}}">
    <x-error name="{{$name}}"/>
</div>
