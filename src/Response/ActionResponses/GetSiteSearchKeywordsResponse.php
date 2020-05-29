<?php
namespace MatmomoReport\Response\ActionResponses;

use MatmomoReport\Entity\Action\GetSiteSearchKeywordsEntity;
use MatmomoReport\Response\CommentListResponse;

class GetSiteSearchKeywordsResponse extends CommentListResponse
{
    /**
     * @return GetSiteSearchKeywordsEntity[]
     */
    public function getList():array
    {
        return $this->getList();
    }
}