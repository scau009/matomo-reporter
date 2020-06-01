<?php
namespace MatomoReport\Request\Actions;


use MatomoReport\Entity\Actions\SiteSearchKeywordsEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Actions\GetSiteSearchKeywordsResponse;
use MatomoReport\Response\IResponse;

class GetSiteSearchKeywordsRequest extends BaseRequest
{
    protected $method = 'Actions.getSiteSearchKeywords';

    /**
     * @param string $fetchResult
     * @return GetSiteSearchKeywordsResponse
     */
    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetSiteSearchKeywordsResponse($this,SiteSearchKeywordsEntity::class,$fetchResult);
    }
}