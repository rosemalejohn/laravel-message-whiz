<?php

namespace Rosemalejohn\MessageWhiz;

use Illuminate\Support\Facades\Http;

class Client
{
    protected $httpClient;

    public function __construct($apiUrl, $apiKey)
    {
        $this->httpClient = Http::withHeaders([
            'apikey' => $apiKey
        ])->baseUrl($apiUrl);
    }

    /**
     * Get http client
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }
}
