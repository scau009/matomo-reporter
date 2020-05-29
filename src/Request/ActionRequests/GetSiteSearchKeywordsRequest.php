<?php
namespace MatmomoReport\Request\ActionRequests;


use MatmomoReport\Entity\Action\GetSiteSearchKeywordsEntity;
use MatmomoReport\Request\AbstractRequest;
use MatmomoReport\Response\ActionResponses\GetSiteSearchKeywordsResponse;
use MatmomoReport\Response\IResponse;

class GetSiteSearchKeywordsRequest extends AbstractRequest
{
    protected $method = 'Actions.getSiteSearchKeywords';

    public function getResponse(array $fetchResult = null): IResponse
    {
        return new GetSiteSearchKeywordsResponse($fetchResult,GetSiteSearchKeywordsEntity::class);
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

    /**
     * @param string $segment
     */
    public function setSegment(string $segment)
    {
        $this->segment = $segment;
    }

}