<?php
namespace MatomoReport\Response\Actions;

use MatomoReport\Entity\Actions\SiteSearchKeywordsEntity;
use MatomoReport\Request\BaseRequest;
use MatomoReport\Response\CommentListResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class GetSiteSearchKeywordsResponse extends CommentListResponse
{
    /**
     * @return SiteSearchKeywordsEntity[]
     */
    public function getList(): array
    {
        return parent::getList();
    }
}