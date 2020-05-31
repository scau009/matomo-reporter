<?php
namespace MatmomoReport\Response\ActionResponses;

use MatmomoReport\Entity\Action\GetSiteSearchKeywordsEntity;
use MatmomoReport\Request\BaseRequest;
use MatmomoReport\Response\CommentListResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class GetSiteSearchKeywordsResponse extends CommentListResponse
{
    /**
     * @return GetSiteSearchKeywordsEntity[]
     */
    public function getList(): array
    {
        return parent::getList();
    }
}