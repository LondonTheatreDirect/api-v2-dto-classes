<?php
namespace LTD_API;

class ReleaseTicketFromBasketResult
{
    private $success;
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

    public function getGetBasketContentResult()
    {
        return $this->getBasketContentResult;
    }
    public function setGetBasketContentResult($getBasketContentResult)
    {
        $this->getBasketContentResult = $getBasketContentResult;
    }
}

