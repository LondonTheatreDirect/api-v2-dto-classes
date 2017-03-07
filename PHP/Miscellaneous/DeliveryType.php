<?php
namespace LTD_API;

class DeliveryType
{
    private $deliveryTypeId;
    private $deliveryTypeName;
    private $deliveryTypePrice;
    
    public function getDeliveryTypeId()
    {
        return $this->deliveryTypeId;
    }
    public function setDeliveryTypeId($deliveryTypeId)
    {
        $this->deliveryTypeId = $deliveryTypeId;
    }

    public function getDeliveryTypeName()
    {
        return $this->deliveryTypeName;
    }
    public function setDeliveryTypeName($deliveryTypeName)
    {
        $this->deliveryTypeName = $deliveryTypeName;
    }

    public function getDeliveryTypePrice()
    {
        return $this->deliveryTypePrice;
    }
    public function setDeliveryTypePrice($deliveryTypePrice)
    {
        $this->deliveryTypePrice = $deliveryTypePrice;
    }
}

