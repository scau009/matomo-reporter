<?php


namespace MatomoReport\Request\Actions;


use MatomoReport\Entity\Actions\SiteSearchCategoriesEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Actions\GetSiteSearchCategoriesResponse;

class GetSiteSearchCategoriesRequest extends BaseRequest
{
    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetSiteSearchCategoriesResponse($this,SiteSearchCategoriesEntity::class,$fetchResult);
    }
}