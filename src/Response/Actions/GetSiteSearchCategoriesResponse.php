<?php


namespace MatomoReport\Response\Actions;


use MatomoReport\Entity\Actions\SiteSearchCategoriesEntity;
use MatomoReport\Response\CommentListResponse;

class GetSiteSearchCategoriesResponse extends CommentListResponse
{
    /**
     * @return SiteSearchCategoriesEntity[]
     */
    public function getList(): array
    {
        return parent::getList(); // TODO: Change the autogenerated stub
    }
}