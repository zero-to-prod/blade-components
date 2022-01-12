@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $tag string */
    /** @var $flex boolean */
@endphp
@if(!$hidden)
<{{$tag}} {{$attributes->class(['flex' => $flex])->merge()}}>{{$slot}}</{{$tag}}>
@endif