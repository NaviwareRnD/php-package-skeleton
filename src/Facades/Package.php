<?php

namespace VendorName\Package\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Package\Package
 */
class Package extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VendorName\Package\Package::class;
    }
}

?>