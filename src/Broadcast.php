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
        $response = $this->client->getHttpClient()->post('/3/Broadcast', $data);

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
        $response = $this->client->getHttpClient()->post('/3/Broadcast/tiny', $data);

        if ($response->successful()) {
            return $response->object()->result;
        }

        throw new MessageWhizAPIException($response->json());
    }

    /**
     * Send one time password to the user
     */
    public function sendOneTimePassword(array $data)
    {
        $response = $this->client->getHttpClient()->post('/broadcasts/single?otp=true', $data);

        if ($response->successful()) {
            return $response->object();
        }

        throw new MessageWhizAPIException($response->json());
    }

    /**
     * Verify one time password
     */
    public function verifyOneTimePassword(string $phoneNumber, string $verificationCode)
    {
        $response = $this->client->getHttpClient()->post("/recipients/$phoneNumber/verification", [
            'verification_code' => $verificationCode
        ]);

        if ($response->successful()) {
            return $response->object();
        }

        throw new MessageWhizAPIException($response->json());
    }
}
