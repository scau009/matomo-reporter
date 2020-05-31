<?php
namespace MatmomoReport\Request;


use MatmomoReport\ReportFetcher;
use MatmomoReport\Response\IResponse;

interface IRequest
{
    public function getRequestMethod() : string;

    public function getAllParams() : array;

    public function setIdSite(string $idSite): self;

    public function setTokenAuth(string $tokenAuth): self;

    public function getFilterLimit();

    public function next(): self;
}