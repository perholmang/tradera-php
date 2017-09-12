<?php

namespace Holmang\Tradera\Search;

class SearchItem
{
    /**
     * @var integer
     */
    public $Id;

    /**
     * @var string
     */
    public $ShortDescription;
    public $BuyItNowPrice;
    /**
     * @var integer
     */
    public $SellerId;

    /**
     * @var string
     */
    public $SellerAlias;

    /**
     * @var integer
     */
    public $MaxBid;

    /**
     * @var string
     */
    public $ThumbnailLink;

    public $SellerDsrAverage;

    /**
     * @var \DateTime
     */
    public $EndDate;

    public $NextBid;

    /**
     * @var boolean
     */
    public $HasBids;

    /**
     * @var boolean
     */
    public $IsEnded;

    /**
     * @var string
     */
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
        $this->EndDate = new \DateTime($item->EndDate);
        $this->NextBid = $item->NextBid;
        $this->HasBids = $item->HasBids;
        $this->IsEnded = $item->IsEnded;
        $this->ItemType = $item->ItemType;
    }
}