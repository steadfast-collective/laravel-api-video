<?php

namespace SteadfastCollective\ApiVideo\Facades;

use Illuminate\Support\Facades\Facade;
use SteadfastCollective\ApiVideo\ApiVideo as BaseApiVideo;

class ApiVideo extends Facade
{
    public static function getFacadeAccessor()
    {
        return new BaseApiVideo;
    }
}
