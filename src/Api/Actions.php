<?php
namespace MatmomoReport\Api;

use MatmomoReport\Request\ActionRequests\GetSiteSearchKeywordsRequest;
use MatmomoReport\Response\ActionResponses\GetSiteSearchKeywordsResponse;

trait Actions
{
    public function getSiteSearchKeywords(GetSiteSearchKeywordsRequest $request):GetSiteSearchKeywordsResponse
    {
        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
        return $request->getResponse($content);
    }

    public function getSiteSearchNoResultKeywords()
    {
        //todo
    }

    public function getSiteSearchCategories()
    {
        //todo
    }
}