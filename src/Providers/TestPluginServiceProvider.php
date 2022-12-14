<?php

namespace Jyrkidn\TestPlugin\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestPluginServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('test-plugin')
            ->setBasePath(__DIR__ . '/../')
            ->hasConfigFile()
            ->hasMigration('create_package_table');
    }
}
