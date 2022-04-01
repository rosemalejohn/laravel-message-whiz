<?php

namespace Rosemalejohn\MessageWhiz;

class BaseAPI
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
