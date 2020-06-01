<?php


namespace MatomoReport\Request\Goals;


use MatomoReport\Entity\Goals\ItemsSkuEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Goals\GetItemsSkuResponse;

class GetItemsSkuRequest extends BaseRequest
{
    protected $method = 'Goals.getItemsSku';

    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetItemsSkuResponse($this,ItemsSkuEntity::class,$fetchResult);
    }
}