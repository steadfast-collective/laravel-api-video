<p align="center"><img src="/api-video.svg" alt="Logo api.video"></p>

<p align="center">
    <a href="https://packagist.org/packages/steadfastcollective/laravel-api-video">
        <img src="https://img.shields.io/packagist/dt/steadfastcollective/laravel-api-video" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/steadfastcollective/laravel-api-video">
        <img src="https://img.shields.io/packagist/v/steadfastcollective/laravel-api-video" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/steadfastcollective/laravel-api-video">
        <img src="https://img.shields.io/packagist/l/steadfastcollective/laravel-api-video" alt="License">
    </a>
</p>

## Introduction

This package is a Laravel wrapper around the [api.video](https://api.video) API that lets you upload & manage your videos directly from your Laravel app. This package is unofficial and is maintained by [Steadfast Collective](https://steadfastcollective.com).

## Documentation

### Installation

1. Install with Composer

```
composer require steadfastcollective/laravel-api-video
```

2. Publish the configuration file

```
php artisan vendor:publish --tag="api-video-config"
```

3. Add your API key and the API URI to your `.env`

```
API_VIDEO_URL=https://sandbox.api.video
API_VIDEO_KEY=....
```

### Usage

The primary way to use this package is via [the Facade](https://github.com/steadfast-collective/laravel-api-video/blob/main/src/Facades/ApiVideo.php). If you'd prefer to not use the class, you may use the `ApiVideo` class directly, like the below example.

```php
use SteadfastCollective\ApiVideo\ApiVideo;

return (new ApiVideo)->getVideo(...);
```

### Get delegate token

TODO: docs link

```php
use SteadfastCollective\ApiVideo\Facades\ApiVideo;

return ApiVideo::getDelegateToken();
```

### Get video

> [Docs: Show a video](https://docs.api.video/reference#get-video)

```php
use SteadfastCollective\ApiVideo\Facades\ApiVideo;

return ApiVideo::getVideo($videoId);
```

**Parameters**

* `videoId`: The unique identifier for the video you want details about.

### Update video

> [Docs: Update a video](https://docs.api.video/reference#patch-video)

```php
use SteadfastCollective\ApiVideo\Facades\ApiVideo;

return ApiVideo::updateVideo($videoId, [$params]);
```

**Parameters**

* `videoId`: The video ID for the video you want to update.
* `params`: Array of parameters you wish to send to api.video. [List of available parameters.](https://docs.api.video/reference#patch-video)

### Delete video

> [Docs: Delete a video](https://docs.api.video/reference#delete-video)

```php
use SteadfastCollective\ApiVideo\Facades\ApiVideo;

return ApiVideo::deleteVideo($videoId);
```

**Parameters**

* `videoId`: The video ID for the video you want to delete.

### Other endpoints?

Currently this SDK only provides a few of the available API methods provided by api.video's API. However, if you're in need of any others, please create an issue and we'll see to adding it!

## License

Laravel api.video is open-sourced software licensed under the [MIT license](LICENSE.md).
