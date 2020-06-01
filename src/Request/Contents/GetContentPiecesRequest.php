<?php


namespace MatomoReport\Request\Contents;


use MatomoReport\Entity\Contents\ContentPiecesEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\Contents\GetContentPiecesResponse;

class GetContentPiecesRequest extends BaseRequest
{

    protected $method = 'Contents.getContentPieces';

    public function getResponse(string $fetchResult = '')
    {
        $fetchResult = json_decode($fetchResult);
        $this->setPageTotal(count($fetchResult));
        $this->setRecordTotal($this->getRecordTotal() + $this->getPageTotal());
        return new GetContentPiecesResponse($this,ContentPiecesEntity::class,$fetchResult);
    }
}