<?php
namespace MatmomoReport\Request;


use MatmomoReport\Response\IResponse;

interface IRequest
{
    public function getRequestMethod() : string;

    public function getAllParams() : array;

    public function getResponse(array $fetchResult = null) : IResponse;

    public function setIdSite(string $idSite): self;

    public function setTokenAuth(string $tokenAuth): self;
}