<?php
namespace MatmomoReport\Request\ActionRequests;


use MatmomoReport\Entity\Action\GetSiteSearchKeywordsEntity;
use MatmomoReport\Request\BaseRequest;
use MatmomoReport\Response\ActionResponses\GetSiteSearchKeywordsResponse;
use MatmomoReport\Response\IResponse;

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
        return new GetSiteSearchKeywordsResponse($this,GetSiteSearchKeywordsEntity::class,$fetchResult);
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period)
    {
        $this->period = $period;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }
}