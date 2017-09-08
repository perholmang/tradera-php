<?php

namespace Holmang\Tradera\Search;

class SearchItem
{
    public $Id;
    public $ShortDescription;
    public $BuyItNowPrice;
    public $SellerId;
    public $SellerAlias;
    public $MaxBid;
    public $ThumbnailLink;
    public $SellerDsrAverage;
    public $EndDate;
    public $NextBid;
    public $HasBids;
    public $IsEnded;
    public $ItemType;

    /**
     * @param $item
     */
    public function __construct($item)
    {
        $this->Id = $item->Id;
        $this->ShortDescription = $item->ShortDescription;
        $this->BuyItNowPrice = $item->BuyItNowPrice;
        $this->SellerId = $item->SellerId;
        $this->SellerAlias = $item->SellerAlias;
        $this->MaxBid = $item->MaxBid;
        $this->ThumbnailLink = $item->ThumbnailLink;
        $this->SellerDsrAverage = $item->SellerDsrAverage;
        $this->EndDate = $item->EndDate;
        $this->NextBid = $item->NextBid;
        $this->HasBids = $item->HasBids;
        $this->IsEnded = $item->IsEnded;
        $this->ItemType = $item->ItemType;
    }
}