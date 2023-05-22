<?php

namespace Siven76\OandaLibrary\Service;

use Symfony\Component\HttpClient\HttpClient;
use Siven76\OandaLibrary\Exception\OandaException;

class OandaService
{
    private $client;
    private $apiUrl = 'https://api-fxtrade.oanda.com/v3/';

    public function __construct(string $apiKey)
    {
        $this->client = HttpClient::create([
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    public function makeRequest(string $method, string $endpoint)
    {
        $response = $this->client->request($method, $this->apiUrl . $endpoint);

        if ($response->getStatusCode() !== 200) {
            throw new OandaException('Error making request to ' . $endpoint);
        }

        return $response->toArray();
    }
}
