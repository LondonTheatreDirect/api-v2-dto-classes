<?php
namespace LTD_API;

class DiscountItem
{
    private $orderItemId;
    private $name;
    private $code;
    private $price;
    
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

