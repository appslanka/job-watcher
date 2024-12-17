<?php

namespace Appslanka\JobWatcher\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appslanka\JobWatcher\JobWatcher
 */
class JobWatcher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Appslanka\JobWatcher\JobWatcher::class;
    }
}
