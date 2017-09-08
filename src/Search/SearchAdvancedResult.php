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

        $this->Items = array_map(function($item) {
            return new SearchItem($item);
        }, $response->SearchAdvancedResult->Items);
    }


}