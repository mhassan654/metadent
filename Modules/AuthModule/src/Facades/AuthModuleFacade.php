<?php

namespace Metadent\AuthModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Metadent\AuthModule\Skeleton\SkeletonClass
 */
class AuthModuleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth-module';
    }
}
