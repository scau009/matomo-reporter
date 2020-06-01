<?php


namespace MatomoReport\Request\Actions;


use MatomoReport\Entity\Actions\SiteSearchNoResultKeywordsEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Actions\GetSiteSearchNoResultKeywordsResponse;

class GetSiteSearchNoResultKeywordsRequest extends BaseRequest
{
    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetSiteSearchNoResultKeywordsResponse($this,SiteSearchNoResultKeywordsEntity::class,$fetchResult);
    }
}