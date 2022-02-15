<?php

namespace Folio3\LaravelBigcommerceApp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Folio3\LaravelBigcommerceApp\Skeleton\SkeletonClass
 */
class LaravelBigcommerceAppFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-bigcommerce-app';
    }
}
