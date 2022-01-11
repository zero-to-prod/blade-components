@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $underline string */
    /** @var $new boolean */
    /** @var $disableAutoTitle string */
@endphp
@if(!$hidden)
    <a {{ $attributes->class([
    'link-underline-none'   => $underline   === 'none',
    'link-underline-always' => $underline   === 'always',
    'link-underline-hover'  => $underline   === 'hover'
    ])->merge([
    'title' => $disableAutoTitle ? null: $attributes['href'],
    'target' => $new ? '_blank' : null
    ])}}>{{ $slot }}</a>
@endif