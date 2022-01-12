<?php

namespace ZeroToProd\BladeComponents\Components\Link;

use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component
{
    public function __construct(
        public ?bool $hidden = false,
        public ?string $tag = null,
        public ?string $color = null,
        public ?string $margin = null,
        public ?string $padding = null,
        public ?string $size = null,
        public ?string $textSize = null,
        public ?string $flex = null,
        public ?string $underline = null,
        public ?bool $new = false,
        public ?bool $disableAutoTitle = false
    ) {
    }

    public function render(): View
    {
        return view('zero-to-prod::Link.link');
    }
}
