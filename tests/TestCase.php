<?php

namespace RustamAliHussaini\RustamPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use RustamAliHussaini\RustamPackage\RustamPackageServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'RustamAliHussaini\\RustamPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            RustamPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');


        $migration = include __DIR__.'/../database/migrations/create_my_models_table.php.stub';
        $migration->up();

    }
}
