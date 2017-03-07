<?php
namespace LTD_API;

class GetTicketPlanPriceResult
{
    private $price;
    
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

