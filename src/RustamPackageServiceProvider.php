<?php

namespace RustamAliHussaini\RustamPackage;

use RustamAliHussaini\RustamPackage\Commands\RustamPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile('rustam-package')

            /*
            ->hasViews()
            */
            ->hasMigration('create_my_models_table')
            ->hasCommand(RustamPackageCommand::class);
    }
}
