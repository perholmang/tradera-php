<?php

require_once __DIR__ . '/vendor/autoload.php';

use Holmang\Tradera\PublicService\PublicService;
use Holmang\Tradera\Search\SearchAdvancedRequest;
use Holmang\Tradera\Search\SearchService;

function test_getSellerItems()
{
    $public = new PublicService([
        'appId' => '1461',
        'appKey' => 'fe2b3cbf-fd5c-43b3-b341-1aa26f802d95', //'05f131ab-2389-467b-84d4-51ae2958824f'
    ]);

    $response = $public->GetSellerItems(467760, 2108);
    var_dump($response);
}
function test_getItem()
{
    $public = new PublicService([
        'appId' => '1460',
        'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f',
    ]);

    $response = $public->GetItem(383719920);
}
function test_searchAdvanced()
{
    $service = new SearchService([
        'appId' => '1460',
        'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f',
    ]);

    $request = new SearchAdvancedRequest();
    $request->ItemStatus = 'Active';
    $request->OrderBy = 'StartDateDescending';
    $request->CategoryId = 2108;
    $request->Alias = 'Bleckburken';
    $request->ItemType = 'BuyItNow';

    $response = $service->searchAdvanced($request);
    var_dump($response->Items[0]);
}
