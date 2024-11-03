<?php

namespace RustamAliHussaini\RustamPackage\Commands;

use Illuminate\Console\Command;

class RustamPackageCommand extends Command
{
    public $signature = 'rustam-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
