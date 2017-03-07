<?php
namespace LTD_API;

class DiscountInformation 
{
    // array of DiscountItem
    private $discounts = array();
    
    public function getDiscounts()
    {
        return $this->discounts;
    }
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
    }
}

