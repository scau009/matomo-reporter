<?php

namespace MatmomoReport;

use GuzzleHttp\Client;
use MatmomoReport\Exception\InvalidIdSiteException;
use MatmomoReport\Exception\InvalidRequestException;
use MatmomoReport\Exception\InvalidTokenException;
use MatmomoReport\Request\IRequest;
use MatmomoReport\Response\ActionResponses\GetSiteSearchKeywordsResponse;
use MatmomoReport\Response\IResponse;

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

    public function __construct(string $requestHost,string $idSite,string $token)
    {
        $this->requestHost = $requestHost;
        $this->token = $token;
        $this->idSite = $idSite;
    }

    /**
     * @return GetSiteSearchKeywordsResponse
     * @throws InvalidIdSiteException
     * @throws InvalidRequestException
     * @throws InvalidTokenException
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
        return $this->request->fetch($this);
    }


    public function setRequest(IRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return IRequest
     */
    public function getRequest(): IRequest
    {
        return $this->request;
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