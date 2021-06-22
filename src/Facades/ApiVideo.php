<?php

namespace SteadfastCollective\ApiVideo\Facades;

use Illuminate\Support\Facades\Facade;
use SteadfastCollective\ApiVideo\ApiVideo as BaseApiVideo;
/**
 * @method static string getDelegateToken()
 * @method static \ApiVideo\Client\Model\Video getVideo(string $videoId)
 * @method static \ApiVideo\Client\Model\Video updateVideo(string $videoId, array $params)
 * @method static int deleteVideo(string $videoId)
 */
class ApiVideo extends Facade
{
    public static function getFacadeAccessor()
    {
        return new BaseApiVideo;
    }
}
