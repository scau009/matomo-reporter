<?php
namespace MatomoReport\Request;


use MatomoReport\ReportFetcher;
use MatomoReport\Response\IResponse;

interface IRequest
{
    public function getResponse(string $fetchResult = '');
}