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

TODO

## License

Laravel api.video is open-sourced software licensed under the [MIT license](LICENSE.md).
