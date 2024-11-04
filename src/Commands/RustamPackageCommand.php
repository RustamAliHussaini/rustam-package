<?php

namespace RustamAliHussaini\RustamPackage\Commands;

use Illuminate\Console\Command;

class RustamPackageCommand extends Command
{
    public $signature = 'rustam-command';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('rustam-package.command_output');
        $this->comment($text);

        return self::SUCCESS;
    }
}
