# Matomo Reporter

根据 matomo 给出的 reporting api 封装的组件

https://developer.matomo.org/api-reference/reporting-api

## Example

```php

$fetcher = new \MatomoReport\ReportFetcher('your matomo system path','idsite','your auth_token');
$request = new \MatomoReport\Request\Goals\GetItemsSkuRequest();
$request->setPeriod('day');
$request->setDate('2020-05-30');
$request->setAbandonedCarts(1);
$response = $fetcher->getItemsSku($request);
$list = $response->getList();

```

