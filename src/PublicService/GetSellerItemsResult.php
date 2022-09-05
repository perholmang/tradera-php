<?php

namespace Holmang\Tradera\PublicService;

class GetSellerItemsResult
{

    public $Items;

    public function __construct($response)
    {

        $this->Items = array_map(function ($item) {
            return new Item($item);
        }, $response->GetSellerItemsResult->Item);
    }

}
