<?php

namespace Holmang\Tradera\PublicService;

use Holmang\Tradera\BaseService;

class PublicService extends BaseService
{
    public function __construct(array $config = [])
    {
        parent::__construct('http://api.tradera.com/v3/PublicService.asmx', $config);
    }

    public function GetItem($itemId)
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            "location" => $this->buildLocation()
        ));

        $params = new \stdClass();
        $params->itemId = $itemId;

        $response = $client->GetItem($params);

        var_dump($response);

        return new Item($response->GetItemResult);
    }
}