<?php
namespace LTD_API;


class GetDeliveryTypesResult
{
    //array of DeliveryType
    private $deliveryTypes;
    
    public function getDeliveryTypes()
    {
        return $this->deliveryTypes;
    }
    public function setDeliveryTypes($deliveryTypes)
    {
        $this->deliveryTypes = $deliveryTypes;
    }
}

