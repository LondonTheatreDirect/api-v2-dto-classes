<?php
namespace LTD_API;

class AddItemToBasketResult
{
    private $success;
    //instance of AddItemToBasketFailureReason
    private $failureReason;
    //instance of GetBasketContentResult
    private $getBasketContentResult;
    
    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getFailureReason()
    {
        return $this->failureReason;
    }
    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;
    }

    public function getGetBasketContentResult()
    {
        return $this->getBasketContentResult;
    }
    public function setGetBasketContentResult($getBasketContentResult)
    {
        $this->getBasketContentResult = $getBasketContentResult;
    }
}

