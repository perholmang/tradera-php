<?php

require_once __DIR__ . '/vendor/autoload.php';

use Holmang\Tradera\Search\SearchAdvancedRequest;
use Holmang\Tradera\Search\SearchService;
use Holmang\Tradera\PublicService\PublicService;

/*$service = new SearchService([
    'appId' => '1460',
    'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f'
]);

$req = new SearchAdvancedRequest();
$req->ItemStatus = 'Ended';
$req->SearchWords = 'bob dylan';
$req->CategoryId = 2108;
$req->SearchWords = 'timbuktu';
$response = $service->searchAdvanced($req);
var_dump($response); die;


/*$request = new SearchAdvancedRequest();
$request->ItemStatus = 'Ended';
$request->CategoryId = 2108;

$response = $service->searchAdvanced($request);

foreach ($response->Items as $item) {
    echo $item->Id. ' - '.$item->EndDate->format('Y-m-d H:i:s')."\n";
}
*/
$public = new PublicService([
    'appId' => '1460',
    'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f'
]);

$public = new PublicService([
    'appId' => '1460',
    'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f'
]);

$response = $public->GetItem(350421400);

var_dump($response);