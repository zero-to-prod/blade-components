<?php

namespace ZeroToProd\BladeComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZeroToProd\BladeComponents\BladeComponents
 */
class BladeComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blade-components';
    }
}
