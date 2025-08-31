<?php

namespace Triskily\StrictValidation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Triskily\StrictValidation\StrictValidation
 */
class StrictValidation extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Triskily\StrictValidation\StrictValidation::class;
    }
}
