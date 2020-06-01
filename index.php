<?php
require_once "./vendor/autoload.php";


$fetcher = new \MatomoReport\ReportFetcher('https://matomo.xyh.io','2','c11245c212526cbd73a22893c487dfb9');
$request = new \MatomoReport\Request\Goals\GetItemsSkuRequest();
$request->setPeriod('day');
$request->setDate('2020-05-30');
$request->setAbandonedCarts(1);
$response = $fetcher->getItemsSku($request);
//var_dump($demo->fetch());
//$d = 11;
$list = $response->getList();
var_dump($list);
//var_dump($request->getAllParams());

//var_dump("limit = ".$request->getFilterLimit());
//var_dump("记录总数 = ".count($list));
//var_dump("是否有下一页 = ".intval($response->isHavNext()));
//var_dump("记录总数 = ".intval($request->getRecordTotal()));
$request->next();



