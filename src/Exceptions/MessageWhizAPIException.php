<?php

namespace Rosemalejohn\MessageWhiz\Exceptions;

class MessageWhizAPIException extends \Exception
{
    public function __construct(array $response)
    {
        parent::__construct($response['errorMessage'], $response['errorCode']);
    }
}
