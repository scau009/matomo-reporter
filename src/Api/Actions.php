<?php
namespace MatomoReport\Api;

use MatomoReport\Request\Actions\GetSiteSearchCategoriesRequest;
use MatomoReport\Request\Actions\GetSiteSearchKeywordsRequest;
use MatomoReport\Request\Actions\GetSiteSearchNoResultKeywordsRequest;
use MatomoReport\Response\Actions\GetSiteSearchCategoriesResponse;
use MatomoReport\Response\Actions\GetSiteSearchKeywordsResponse;
use MatomoReport\Response\Actions\GetSiteSearchNoResultKeywordsResponse;

trait Actions
{
    public function getSiteSearchKeywords(GetSiteSearchKeywordsRequest $request):GetSiteSearchKeywordsResponse
    {
        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
        return $request->getResponse($content);
    }

//    public function getSiteSearchNoResultKeywords(GetSiteSearchNoResultKeywordsRequest $request) :GetSiteSearchNoResultKeywordsResponse
//    {
//        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
//        return $request->getResponse($content);
//    }

//    public function getSiteSearchCategories(GetSiteSearchCategoriesRequest $request) :GetSiteSearchCategoriesResponse
//    {
//        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
//        return $request->getResponse($content);
//    }
}