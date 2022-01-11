<?php

namespace ZeroToProd\BladeComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ZeroToProd\BladeComponents\Components\Box\Box;
use ZeroToProd\BladeComponents\Components\Container\Container;
use ZeroToProd\BladeComponents\Components\Link\Link;

class BladeComponentsServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->loadViewComponentsAs(null, [
            Box::class,
            Link::class,
            Container::class,
        ]);
        $this->loadViewsFrom(__DIR__.'/Components', 'zero-to-prod');
        $this->publishes([
            __DIR__.'/../dist' => public_path('zero-to-prod/blade-components'),
        ], 'public');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('blade-components');
    }
}
