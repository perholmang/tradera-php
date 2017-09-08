<?php

namespace Holmang\Tradera\PublicService;

class ItemStatus
{
    public $Ended;
    public $GotBidders;
    public $GotWinner;

    public function __construct($itemStatus = null)
    {
        if ($itemStatus) {
            $this->Ended = $itemStatus->Ended;
            $this->GotBidders = $itemStatus->GotBidders;
            $this->GotWinner = $itemStatus->GotWinner;
        }
    }
}