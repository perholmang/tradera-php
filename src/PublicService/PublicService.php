<?php

namespace Holmang\Tradera\PublicService;

use Holmang\Tradera\BaseService;

class PublicService extends BaseService
{
    public function __construct(array $config = [])
    {
        parent::__construct('http://api.tradera.com/v3/PublicService.asmx', $config);
    }

    /**
     * @param $itemId
     * @return Item
     */
    public function GetItem($itemId)
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            "exceptions" => 0,
            "location" => $this->buildLocation()
        ));


        $params = new \stdClass();
        $params->itemId = $itemId;

        $response = $client->GetItem($params);

        /*var_dump($client->__getLastRequestHeaders());
        die;*/

        if (!isset($response->GetItemResult)) {
            throw new ItemNotFoundException();
        }

        return new Item($response->GetItemResult);
    }

    public function GetCategories()
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            "location" => $this->buildLocation()
        ));

        $response = $client->GetCategories();

        $categories = [];

        foreach ($response->GetCategoriesResult->Category as $category) {
            $categories[] = new Category($category);
        }

        return $categories;
    }
}