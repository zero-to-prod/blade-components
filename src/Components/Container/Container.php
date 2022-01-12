<?php

namespace ZeroToProd\BladeComponents\Components\Container;

use Illuminate\View\Component;
use Illuminate\View\View;

class Container extends Component
{
    public function __construct(
        public ?bool $hidden = false,
        public ?string $tag = 'div',
        public ?string $color = null,
        public ?string $margin = null,
        public ?string $padding = null,
        public ?string $size = null,
        public ?string $textSize = null,
        public ?string $flex = null,
        public ?bool $disableGutters = false,
        public ?string $maxWidth = '7'
    ) {
    }

    public function render(): View
    {
        return view('zero-to-prod::Container.container');
    }
}
