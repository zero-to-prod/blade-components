@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $tag string */
    /** @var $color string */
    /** @var $margin string */
    /** @var $padding string */
    /** @var $size string */
    /** @var $textSize string */
    /** @var $flex string */
@endphp
@if(!$hidden)
<{{$tag}} {{$attributes->class(['flex' =>
    $flex,
    $color,
    $margin,
    $padding,
    $size,
    $textSize,
])->merge()}}>{{$slot}}</{{$tag}}>
@endif