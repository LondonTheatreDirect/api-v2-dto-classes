<?php
namespace LTD_API;

class CreateBasketResult
{
    private $success;
    private $basketId;

    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getBasketId()
    {
        return $this->basketId;
    }
    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;
    }
}

