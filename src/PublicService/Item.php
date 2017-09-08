<?php

namespace Holmang\Tradera\PublicService;

class Item
{
    public $Id;
    public $VAT;
    public $ShortDescription;
    public $OwnReferences;
    public $LongDescription;
    public $StartDate;
    public $EndDate;
    public $CategoryId;
    public $OpeningBid;
    public $ReservePrice;
    public $ReservePriceReached;
    public $BuyItNowPrice;
    public $NextBid;

    /**
     * @var ItemShipping
     */
    public $ShippingOptions;

    public $PaymentCondition;
    public $ShippingCondition;
    public $AcceptsPickup;
    public $PaymentOptions;
    public $TotalBids;
    public $MaxBid;
    public $StatusId;
    public $ImageLinks;
    public $Bold;
    public $Thumbnail;
    public $ItemLink;
    public $ThumbnailLink;
    public $AcceptedBuyerId;
    public $Paypal;
    public $PaymentTypeId;

    /**
     * @var User
     */
    public $Seller;

    /**
     * @var User
     */
    public $MaxBidder;


    public $BuyerList;

    /**
     * @var ItemStatus
     */
    public $Status;

    public $StartQuantity;
    public $RemainingQuantity;
    public $ItemType;

    /**
     * Item constructor.
     * @param $result
     */
    public function __construct($result)
    {
        $this->Id = $result->Id;
        $this->VAT = $result->VAT;
        $this->ShortDescription = $result->ShortDescription;
        $this->OwnReferences = $result->OwnReferences;
        $this->LongDescription = $result->LongDescription;
        $this->StartDate = $result->StartDate;
        $this->EndDate = $result->EndDate;
        $this->CategoryId = $result->CategoryId;
        $this->OpeningBid = $result->OpeningBid;
        $this->ReservePrice = $result->ReservePrice;
        $this->ReservePriceReached = $result->ReservePriceReached;

        if (isset($result->BuyItNowPrice)) {
            $this->BuyItNowPrice = $result->BuyItNowPrice;
        }

        $this->NextBid = $result->NextBid;
        
        $this->ShippingOptions = array_map(function ($option) {
            new ItemShipping($option);
        }, $result->ShippingOptions);

        $this->PaymentCondition = $result->PaymentCondition;
        $this->ShippingCondition = $result->ShippingCondition;
        $this->AcceptsPickup = $result->AcceptsPickup;
        $this->PaymentOptions = $result->PaymentOptions->int;
        $this->TotalBids = $result->TotalBids;
        $this->MaxBid = $result->MaxBid;

        $this->ImageLinks = $result->ImageLinks->string;

        $this->Bold = $result->Bold;
        $this->Thumbnail = $result->Thumbnail;
        $this->ItemLink = $result->ItemLink;
        $this->ThumbnailLink = $result->ThumbnailLink;
        $this->AcceptedBuyerId = $result->AcceptedBuyerId;
        $this->Paypal = $result->Paypal;
        $this->PaymentTypeId = $result->PaymentTypeId;

        $this->Seller = new User($result->Seller);

        $this->MaxBidder = isset($result->MaxBidder) ? new User($result->MaxBidder) : null;

        $this->Status = new ItemStatus($result->Status);


        $this->StartQuantity = $result->StartQuantity;
        $this->RemainingQuantity = $result->RemainingQuantity;
        $this->ItemType = $result->ItemType;

        // $this->TimeLeft = $result->TimeLeft;
        // $this->BuyerList = $result->BuyerList;
    }
}