@props(['name','label'])
<div class="field">
    <label for="{{$name}}" name="{{$label}}">{{$label}}</label>
    <input name="{{$name}}" id="{{$name}}" {{$attributes(['value'=>old($name)])}}>
    
    <x-error name="{{$name}}"/>
</div>
