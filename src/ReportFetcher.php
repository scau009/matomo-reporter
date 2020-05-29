<?php

namespace MatmomoReport;

use GuzzleHttp\Client;
use MatmomoReport\Exception\InvalidIdSiteException;
use MatmomoReport\Exception\InvalidRequestException;
use MatmomoReport\Exception\InvalidTokenException;
use MatmomoReport\Request\IRequest;

class ReportFetcher{

    /**
     * @var IRequest $request
     */
    private $request;

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

    /**
     * @var Client $client
     */
    private $client;

    public function __construct(string $requestHost,string $idSite,string $token)
    {
        $this->requestHost = $requestHost;
        $this->token = $token;
        $this->idSite = $idSite;
        $this->client = new Client();
    }

    /**
     * @return mixed|void|null
     */
    public function fetch()
    {
        if (empty($this->token)) {
            throw new InvalidTokenException();
        }
        if (empty($this->request)) {
            throw new InvalidRequestException();
        }
        if (empty($this->idSite)) {
            throw new InvalidIdSiteException();
        }
        $this->request->setIdSite($this->idSite)->setTokenAuth($this->token);
        if ($this->request->getRequestMethod() == "GET") {
            return $this->fetchGet();
        }else if ($this->request->getRequestMethod() == "POST") {
            return $this->fetchPost();
        }else{
            return $this->fetchGet();
        }
    }

    private function fetchGet()
    {
        $response = $this->client->request($this->request->getRequestMethod(),$this->requestHost,[
            'query' => $this->request->getAllParams(),
        ]);
        $content = $response->getBody()->getContents();
        if (empty($content)) {
            return $this->request->getResponse();
        }else{
            return $this->request->getResponse(json_decode($content));
        }
    }

    private function fetchPost()
    {
        // todo 暂时不支持（好像不需要 post请求）
        return false;
    }

    public function setRequest(IRequest $request)
    {
        $this->request = $request;
        return $this;
    }

}