<?php

namespace Rosemalejohn\MessageWhiz;

use Rosemalejohn\MessageWhiz\Exceptions\MessageWhizAPIException;

class Campaign extends BaseAPI
{
    /**
     * Get campaign lists
     */
    public function getCampaignList()
    {
        $response = $this->client->getHttpClient()->get('/campaign');

        if ($response->successful()) {
            return collect($response->object()->result);
        }

        throw new MessageWhizAPIException($response->json());
    }
}
