<?php
namespace LTD_API;

class GetBasketContentResult
{
    private $basketId;
    //date format
    private $minExpirationDate;
    //instance of DeliveryInformation
    private $deliveryInformation;
    //array of BasketItem
    private $items = array();
    //instance of DiscountInformation
    private $discountInformation;
    
    public function getBasketId()
    {
        return $this->basketId;
    }
    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;
    }

    public function getMinExpirationDate()
    {
        return $this->minExpirationDate;
    }
    public function setMinExpirationDate($minExpirationDate)
    {
        $this->minExpirationDate = $minExpirationDate;
    }

    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }
    public function setDeliveryInformation($deliveryInformation)
    {
        $this->deliveryInformation = $deliveryInformation;
    }

    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getDiscountInformation()
    {
        return $this->discountInformation;
    }
    public function setDiscountInformation($discountInformation)
    {
        $this->discountInformation = $discountInformation;
    }
}

