<?php

namespace MatomoReport;

use GuzzleHttp\Client;
use MatomoReport\Api\Actions;
use MatomoReport\Api\Contents;
use MatomoReport\Api\Goals;
use MatomoReport\Exception\InvalidIdSiteException;
use MatomoReport\Exception\InvalidRequestException;
use MatomoReport\Exception\InvalidTokenException;

class ReportFetcher{

    use Actions, Contents, Goals;

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
        $this->requestHost = $requestHost.'/index.php';
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
        if (empty($params['method'])) {
            throw new InvalidRequestException();
        }
        $params['idSite'] = $this->idSite;
        $params['token_auth'] = $this->token;
        //var_dump($this->requestHost.'?'.http_build_query($params));
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