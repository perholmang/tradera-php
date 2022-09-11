<?php

namespace Holmang\Tradera\Search;

class SearchAdvancedResult
{
    /**
     * @var integer
     */
    public $TotalNumberOfItems;

    /**
     * @var integer
     */
    public $TotalNumberOfPages;

    /**
     * @var array
     */
    public $Items;

    public function __construct($response)
    {
        $this->TotalNumberOfItems = $response->SearchAdvancedResult->TotalNumberOfItems;
        $this->TotalNumberOfPages = $response->SearchAdvancedResult->TotalNumberOfPages;

        $this->Items = array_map(function ($item) {
            if (!isset($item->SellerAlias)) {
                return null;
            }

            return new SearchItem($item);
        }, getItems($response));

        $this->Items = array_filter($this->Items);
    }
}

function getItems($response)
{
    if (!isset($response->SearchAdvancedResult->Items)) return [];

    if (is_array($response->SearchAdvancedResult->Items)) {
        return $response->SearchAdvancedResult->Items;
    } else if (is_object($response->SearchAdvancedResult->Items)) {
        return [$response->SearchAdvancedResult->Items];
    }
    return [];
}
