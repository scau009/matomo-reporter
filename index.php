<?php
require_once "./vendor/autoload.php";


$demo = new \MatmomoReport\ReportFetcher('https://matomo.xyh.io/index.php','1','c11245c212526cbd73a22893c487dfb9');
$request = new \MatmomoReport\Request\ActionRequests\GetSiteSearchKeywordsRequest();
$request->setPeriod('day');
$request->setDate('today');
$demo->setRequest($request);
$demo->fetch();
//var_dump($demo->fetch());

