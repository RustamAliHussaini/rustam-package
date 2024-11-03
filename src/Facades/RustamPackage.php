<?php

namespace RustamAliHussaini\RustamPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RustamAliHussaini\RustamPackage\RustamPackage
 */
class RustamPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RustamAliHussaini\RustamPackage\RustamPackage::class;
    }
}
