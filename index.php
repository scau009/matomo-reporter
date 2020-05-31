<?php
require_once "./vendor/autoload.php";


$demo = new \MatmomoReport\ReportFetcher('https://matomo.xyh.io/index.php','1','c11245c212526cbd73a22893c487dfb9');
$request = new \MatmomoReport\Request\ActionRequests\GetSiteSearchKeywordsRequest();
$request->setPeriod('day');
$request->setDate('today');
$response = $demo->setRequest($request)->fetch();
//var_dump($demo->fetch());
//$d = 11;
$list = $response->getList();
var_dump("limit = ".$request->getFilterLimit());
var_dump("记录总数 = ".count($list));
var_dump("是否有下一页 = ".intval($response->isHavNext()));
var_dump("记录总数 = ".intval($request->getRecordTotal()));
$request->next();
$response2 = $demo->fetch();
var_dump(count($response2->getList()));

//foreach ($list as $item) {
//    $item->get
//}
//var_dump($demo);


