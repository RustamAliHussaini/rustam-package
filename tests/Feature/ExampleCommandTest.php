<?php

use RustamAliHussaini\RustamPackage\Commands\RustamPackageCommand;

use function Pest\Laravel\artisan;

it('it can output the configured value', function () {
    artisan(RustamPackageCommand::class)
        ->expectsOutput(config('rustam-package.command_output'))
        ->assertExitCode(0);
});
it('it can output another value', function () {
    config()->set('rustam-package.command_output', 'something else');
    artisan(RustamPackageCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(0);
});
