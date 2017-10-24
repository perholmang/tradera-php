<?php

namespace Holmang\Tradera\Search;

class SearchAdvancedRequest
{
    public $SearchWords;
    public $CategoryId;
    public $Mode;
    public $PriceMinimum;
    public $PriceMaximum;
    public $BidsMinimum = 0;
    public $BidsMaximum;
    public $ZipCode;
    public $CountyId = 0;
    public $Alias;
    public $OrderBy = 'EndDateDescending';
    public $ItemStatus;
    public $ItemType = 'Auction';
    public $OnlyAuctionsWithBuyNow = false;
    public $OnlyItemsWithThumbnail = false;
    public $ItemsPerPage = 500;
    public $PageNumber = 1;
    public $ItemCondition;
    public $SellerType;
    public $Brands;
    public $SearchInDescription = false;
}