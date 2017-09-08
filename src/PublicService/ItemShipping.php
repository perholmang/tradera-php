<?php

namespace Holmang\Tradera\PublicService;

class ItemShipping
{
    public $ShippingOptionId;
    public $Cost;

    public function __construct($shipping)
    {
        if ($shipping) {
            $this->ShippingOptionId = $shipping->ShippingOptionId;
            $this->Cost = $shipping->Cost;
        }
    }
}