<?php

namespace TikTok\OAuth2\Client\Providers;

use League\OAuth2\Client\OptionProvider\OptionProviderInterface;

class TikTokOptionProvider implements OptionProviderInterface
{
    public function getAccessTokenOptions($method, array $params): array
    {
        return [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Cache-Control' => 'no-cache',
                'Accept' => 'application/json'
            ],
            'body' => http_build_query($params)
        ];
    }
}
