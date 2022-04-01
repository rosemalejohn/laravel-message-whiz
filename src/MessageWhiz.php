<?php

namespace Rosemalejohn\MessageWhiz;

class MessageWhiz
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(config('messagewhiz.api_url'), config('messagewhiz.api_key'));
    }

    /**
     * Message whiz campaign API
     */
    public function campaign()
    {
        return new Campaign($this->client);
    }

    /**
     * Message whiz broadcast API
     */
    public function broadcast()
    {
        return new Broadcast($this->client);
    }

    /**
     * Message whiz Link API
     */
    public function link()
    {
        return new Link($this->client);
    }

    /**
     * Message whiz recipient API
     */
    public function recipient()
    {
        return new Recipient($this->client);
    }

    /**
     * Message whiz sender API
     */
    public function sender()
    {
        return new Sender($this->client);
    }

    /**
     * Message whiz template API
     */
    public function template()
    {
        return new Template($this->client);
    }

    /**
     * Message whiz trigger API
     */
    public function trigger()
    {
        return new Trigger($this->client);
    }
}
