<?php

namespace RustamAliHussaini\RustamPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RustamAliHussaini\RustamPackage\Commands\RustamPackageCommand;

class RustamPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('rustam-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_rustam_package_table')
            ->hasCommand(RustamPackageCommand::class);
    }
}
