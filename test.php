<?php

require_once __DIR__ . '/vendor/autoload.php';

use Holmang\Tradera\PublicService\PublicService;

/*$service = new SearchService([
    'appId' => '1461',
    'appKey' => 'fe2b3cbf-fd5c-43b3-b341-1aa26f802d95'
]);

$request = new SearchAdvancedRequest();
$request->ItemStatus = 'Ended';
$request->CategoryId = 2108;

$response = $service->searchAdvanced($request);

foreach ($response->Items as $item) {
    echo $item->Id. ' - '.$item->EndDate->format('Y-m-d H:i:s')."\n";
}*/

$public = new PublicService([
    'appId' => '1460',
    'appKey' => '05f131ab-2389-467b-84d4-51ae2958824f'
]);


$response = $public->GetCategories();

var_dump($response);