@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $flex boolean */
@endphp
@if(!$hidden)
    <div {{$attributes->class(['flex' => $flex])->merge()}}>
        {{$slot}}
    </div>
@endif