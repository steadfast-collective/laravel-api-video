<?php

namespace SteadfastCollective\ApiVideo;

use ApiVideo\Client\Client;
use ApiVideo\Client\Exception\AuthenticationFailed;
use ApiVideo\Client\Model\Video;
use Illuminate\Support\Str;

class ApiVideo
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct()
    {
        if (Str::of(config('api-video.url'))->contains('sandbox')) {
            $this->client = Client::createSandbox(config('api-video.key'));
        } else {
            $this->client = Client::create(config('api-video.key'));
        }
    }

    /**
     * @return string
     * @throws AuthenticationFailed
     */
    public function getDelegateToken(): string
    {
        return $this->client->tokens->generate();
    }

    /**
     * @param string $videoId
     * @return Video|null
     * @throws AuthenticationFailed
     */
    public function getVideo(string $videoId)
    {
        return $this->client->videos->get($videoId);
    }

    /**
     * @param string $videoId
     * @param array $params
     * @return Video|null
     * @throws AuthenticationFailed
     */
    public function updateVideo(string $videoId, array $params)
    {
        return $this->client->videos->update($videoId, $params);
    }

    /**
     * @param string $videoId
     * @return int|null
     * @throws AuthenticationFailed
     */
    public function deleteVideo(string $videoId)
    {
        return $this->client->videos->delete($videoId);
    }
}
