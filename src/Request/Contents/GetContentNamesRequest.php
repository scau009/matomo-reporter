<?php


namespace MatomoReport\Request\Contents;


use MatomoReport\Entity\Contents\ContentNamesEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Contents\GetContentNamesResponse;

class GetContentNamesRequest extends BaseRequest
{
    protected $method = 'Contents.getContentNames';

    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetContentNamesResponse($this,ContentNamesEntity::class,$fetchResult);
    }
}