<?php


namespace MatomoReport\Response\Contents;


use MatomoReport\Entity\Contents\ContentPiecesEntity;
use MatomoReport\Response\CommentListResponse;

class GetContentPiecesResponse extends CommentListResponse
{
    /**
     * @return ContentPiecesEntity[]
     */
    public function getList(): array
    {
        return parent::getList(); // TODO: Change the autogenerated stub
    }
}