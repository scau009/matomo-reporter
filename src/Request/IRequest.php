<?php
namespace MatmomoReport\Request;


use MatmomoReport\ReportFetcher;
use MatmomoReport\Response\IResponse;

interface IRequest
{
    public function getResponse(string $content);
}