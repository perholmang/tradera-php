<?php

require_once __DIR__ . '/vendor/autoload.php';

use Holmang\Tradera\Search\SearchService;

$service = new SearchService([
    'appId' => '1461',
    'appKey' => 'fe2b3cbf-fd5c-43b3-b341-1aa26f802d95'
]);

$request = new \Holmang\Tradera\Search\SearchAdvancedRequest();
$request->CategoryId = 2108;

$response = $service->searchAdvanced($request);

var_dump($response);

/*$public = new PublicService([
    'appId' => '1461',
    'appKey' => 'fe2b3cbf-fd5c-43b3-b341-1aa26f802d95'
]);

$response = $public->GetItem('289003927');*/