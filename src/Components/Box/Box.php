<?php

namespace ZeroToProd\BladeComponents\Components\Box;

use Illuminate\View\Component;
use Illuminate\View\View;

class Box extends Component
{
    public function __construct(
        public ?bool $hidden = false,
        public ?string $tag = 'div',
        public ?bool $flex = false
    ) {
    }
    public function render(): View
    {
        return view('zero-to-prod::Box.box');
    }
}
