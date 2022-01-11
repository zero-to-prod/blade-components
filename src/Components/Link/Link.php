<?php

namespace ZeroToProd\BladeComponents\Components\Link;

use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component
{
    public function __construct(public ?bool $hidden = false, public ?string $underline = null, public ?bool $disableAutoTitle = false)
    {
    }

    public function render(): View
    {
        return view('zero-to-prod::Link.link');
    }
}
