<?php


namespace MatomoReport\Api;


use MatomoReport\Request\Contents\GetContentNamesRequest;
use MatomoReport\Request\Contents\GetContentPiecesRequest;
use MatomoReport\Response\Contents\GetContentNamesResponse;
use MatomoReport\Response\Contents\GetContentPiecesResponse;

trait Contents
{
    public function getContentNames(GetContentNamesRequest $request):GetContentNamesResponse
    {
        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
        return $request->getResponse($content);
    }

    public function getContentPieces(GetContentPiecesRequest $request) :GetContentPiecesResponse
    {
        $content = $this->fetch($request->getRequestMethod(), $request->getAllParams());
        return $request->getResponse($content);
    }
}