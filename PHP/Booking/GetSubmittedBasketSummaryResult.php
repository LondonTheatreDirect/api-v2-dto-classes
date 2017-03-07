<?php
namespace LTD_API;

class GetSubmittedBasketSummaryResult
{
    private $transactionReference;
    private $basketId;
    //instance of DeliveryInformation
    private $deliveryInformation;
    //array of BasketItem
    private $basketItems = array();
    private $bookingReference;
    //instance of DiscountInformation
    private $discountInformation;
    
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;
    }

    public function getBasketId()
    {
        return $this->basketId;
    }
    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;
    }

    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }
    public function setDeliveryInformation($deliveryInformation)
    {
        $this->deliveryInformation = $deliveryInformation;
    }

    public function getBasketItems()
    {
        return $this->basketItems;
    }
    public function setBasketItems($basketItems)
    {
        $this->basketItems = $basketItems;
    }

    public function getBookingReference()
    {
        return $this->bookingReference;
    }
    public function setBookingReference($bookingReference)
    {
        $this->bookingReference = $bookingReference;
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

