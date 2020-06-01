<?php


namespace MatomoReport\Api;


use MatomoReport\Request\Goals\GetItemsSkuRequest;
use MatomoReport\Response\Goals\GetItemsSkuResponse;

trait Goals
{
    public function getItemsSku(GetItemsSkuRequest $request):GetItemsSkuResponse
    {
        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
        return $request->getResponse($content);
    }
}