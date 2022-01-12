@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $underline string */
    /** @var $color string */
    /** @var $margin string */
    /** @var $padding string */
    /** @var $size string */
    /** @var $textSize string */
    /** @var $flex string */
    /** @var $new boolean */
    /** @var $disableAutoTitle string */
@endphp
@if(!$hidden)
    <a {{ $attributes->class([
    $color,
    $margin,
    $padding,
    $size,
    $textSize,
    $flex,
    'link-underline-none'   => $underline   === 'none',
    'link-underline-always' => $underline   === 'always',
    'link-underline-hover'  => $underline   === 'hover'
    ])->merge([
    'title' => $disableAutoTitle ? null: $attributes['href'],
    'target' => $new ? '_blank' : null
    ])}}>{!! $tag !== null ? "<$tag>": null !!}{{ $slot }}{!!$tag !== null ? "</$tag>": null !!}</a>
@endif