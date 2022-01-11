<?php

namespace ZeroToProd\BladeComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ZeroToProd\BladeComponents\Components\Box\Box;

class BladeComponentsServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->loadViewComponentsAs(null, [
            Box::class,
        ]);
        $this->loadViewsFrom(__DIR__.'/Components', 'zero-to-prod');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('blade-components');
    }
}
