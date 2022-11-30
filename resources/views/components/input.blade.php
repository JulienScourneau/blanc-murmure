@props(['name','label'])
<div class="py-2.5">
    <label class="text-primaryText flex self-start pl-16 my-2" for="{{$name}}" name="{{$label}}">{{$label}}</label>
    <input class="w-10/12 rounded-full border-2 border-disableText p-5" name="{{$name}}" id="{{$name}}" {{$attributes(['value'=>old($name)])}}>

    <x-error name="{{$name}}"/>
</div>
