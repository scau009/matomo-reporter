<?php

namespace MatmomoReport;

use GuzzleHttp\Client;
use MatmomoReport\Api\Actions;
use MatmomoReport\Exception\InvalidIdSiteException;
use MatmomoReport\Exception\InvalidRequestException;
use MatmomoReport\Exception\InvalidTokenException;

class ReportFetcher{

    use Actions;

    /**
     * @var string $requestHost
     */
    private $requestHost;

    /**
     * @var string $idSite
     */
    private $idSite;

    /**
     * @var string $token
     */
    private $token;

    protected $client;

    public function __construct(string $requestHost,string $idSite,string $token)
    {
        $this->requestHost = $requestHost;
        $this->token = $token;
        $this->idSite = $idSite;
        $this->client = new Client();
    }

    /**
     * @param string $method
     * @param array $params
     * @return string
     * @throws InvalidIdSiteException
     * @throws InvalidTokenException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function fetch(string $method,array $params)
    {
        if (empty($this->token)) {
            throw new InvalidTokenException();
        }
        if (empty($this->idSite)) {
            throw new InvalidIdSiteException();
        }
        $params['idSite'] = $this->idSite;
        $params['token_auth'] = $this->token;

        $response = $this->client->request($method,$this->requestHost,[
            'query' => $params,
        ]);

        return $response->getBody()->getContents();
    }


    /**
     * @return string
     */
    public function getRequestHost(): string
    {
        return $this->requestHost;
    }

    /**
     * @return string
     */
    public function getIdSite(): string
    {
        return $this->idSite;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }


}