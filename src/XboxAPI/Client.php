<?php

namespace XboxAPI;

use XboxAPI\API\Me as MeAPI;
use XboxAPI\HttpClient\HttpClient;
use XboxAPI\HttpClient\HttpClientInterface;

class Client
{
    /**
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * @var HttpClientInterface $httpClient
     */
    private $httpClient;

    /**
     * @param string $apiKey
     * @param HttpClientInterface $httpClient
     */
    public function __construct($apiKey, HttpClientInterface $httpClient = null)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new HttpClient($this->apiKey);
        }

        return $this->httpClient;
    }

    /**
     * @param HttpClientInterface $httpClient
     */
    public function setHttpClient(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    //todo
    public function clearHeaders()
    {
        $this->getHttpClient()->clearHeaders();
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->getHttpClient()->setHeaders($headers);
    }

    /**
     * @return MeAPI
     */
    public function me()
    {
        return new MeAPI($this);
    }
}