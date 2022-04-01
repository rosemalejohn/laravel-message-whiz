<?php

namespace Rosemalejohn\MessageWhiz;

use Rosemalejohn\MessageWhiz\Exceptions\MessageWhizAPIException;

class Broadcast extends BaseAPI
{
    /**
     * Send a single message broadcast
     */
    public function sendSingleMessageBroadcast(array $data = [])
    {
        $response = $this->client->getHttpClient()->post('/Broadcast', $data);

        if ($response->successful()) {
            return $response->object()->result;
        }

        throw new MessageWhizAPIException($response->json());
    }

    /**
     * Send a tiny single message broadcast
     */
    public function sendTinySingleMessageBroadcast(array $data = [])
    {
        $response = $this->client->getHttpClient()->post('/Broadcast/tiny', $data);

        if ($response->successful()) {
            return $response->object()->result;
        }

        throw new MessageWhizAPIException($response->json());
    }
}
