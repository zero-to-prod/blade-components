@php
    /** @var $attributes \Illuminate\View\ComponentAttributeBag */
    /** @var $hidden boolean */
    /** @var $disableGutters boolean */
    /** @var $maxWidth string */
@endphp
@if(!$hidden)
    <div {{ $attributes->class([
                'mx-auto px-4',
                'px-0'             => $disableGutters,
                'max-w-0'          => $maxWidth == '0',
                'max-w-none'       => $maxWidth === 'none',
                'max-w-xs'         => $maxWidth === 'xs',
                'max-w-sm'         => $maxWidth === 'sm',
                'max-w-md'         => $maxWidth === 'md',
                'max-w-lg'         => $maxWidth === 'lg',
                'max-w-xl'         => $maxWidth === 'xl',
                'max-w-2xl'        => $maxWidth == '2',
                'max-w-3xl'        => $maxWidth == '3',
                'max-w-4xl'        => $maxWidth == '4',
                'max-w-5xl'        => $maxWidth == '5',
                'max-w-6xl'        => $maxWidth == '6',
                'max-w-7xl'        => $maxWidth == '7',
                'max-w-full'       => $maxWidth === 'full',
                'max-w-min'        => $maxWidth === 'min',
                'max-w-max'        => $maxWidth === 'max',
                'max-w-fit'        => $maxWidth === 'fit',
                'max-w-prose'      => $maxWidth === 'prose',
                'max-w-screen-sm'  => $maxWidth === 'screen-sm',
                'max-w-screen-md'  => $maxWidth === 'screen-md',
                'max-w-screen-lg'  => $maxWidth === 'screen-lg',
                'max-w-screen-xl'  => $maxWidth === 'screen-xl',
                'max-w-screen-2xl' => $maxWidth === 'screen-2xl',
            ])->merge() }}>
        {{$slot}}
    </div>
@endif